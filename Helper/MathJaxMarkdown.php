<?php

namespace Kanboard\Plugin\mathjaxForKanboard\Helper;

use Parsedown;

/**
 * Paresdown plugin for mathjax escapes
 *  Source: https://github.com/erusev/parsedown/wiki/Tutorial:-Create-Extensions
 *
 * @author  Michael Zauner
 */

class MathJaxMarkdown extends Parsedown
{

    function __construct()
    {
        $this->InlineTypes['$'][]= 'MathJax';
        $this->BlockTypes['$'][]= 'MathJax';

        $this->inlineMarkerList .= '$';
    }


    protected function inlineMathJax($excerpt)
    {
        if (preg_match('/^\${2,3}(.*?)\${2,3}/', $excerpt['text'], $matches))
        {
            return array(

                // How many characters to advance the Parsedown's
                // cursor after being done processing this tag.
                'extent' => strlen($matches[0]), 
                'element' => array(
                    'name' => 'span',
                    'text' => $matches[0],
                    // 'attributes' => array(
                    //     'style' => 'color: green',
                    // ),                 
                ),

            );
        }
    }



    protected function blockMathJax($line, $block)
    {
        if (preg_match('/^\${2,3}$/', $line['text'], $matches))
        {
            return array(
                'char' => $line['text'][0],
                'element' => array(
                    'name' => 'div',
                    'text' => $line['text'],
                    // 'attributes' => array(
                    //     'style' => 'color: cyan',
                    // ),
                ),
            );
        }
    } 

    /**
     * Appending the word `continue` to the function name will cause this function to be
     * called to process any following lines, until $block['complete'] is set to be 'true'.
     */
    protected function blockMathJaxContinue($line, $block)
    {
        if (isset($block['complete']))
        {
            return;
        }

        // A blank newline has occurred.
        if (isset($block['interrupted']))
        {
            $block['element']['text'] .= "\n";
            unset($block['interrupted']);
        }

        // Check for end of the block. 
        if (preg_match('/^\${2,3}$/', $line['text'],$matches))
        {
            $block['element']['text'] .= "\n" . $matches[0];

            // This will flag the block as 'complete':
            // 1. The 'continue' function will not be called again.
            // 2. The 'complete' function will be called instead.
            $block['complete'] = true;
            return $block;
        }
        
        $block['element']['text'] .= "\n" . $line['body'];
        
        return $block;
    }

    /**
     * Appending the word `complete` to the function name will cause this function to be
     * called when the block is marked as *complete* (see the previous method).
     */
    protected function blockMathJaxComplete($block)
    {
        return $block;
    }


}