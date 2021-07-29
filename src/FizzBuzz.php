<?php
namespace FizzBuzz;

class FizzBuzz
{
    public function apply($index)
    {
    	$result = "";
        for ($i = 1; $i <= $index; $i++) {
        	$output = "";

        	if ($i % 3 === 0) {
        		$output .= "Geeks";
        	}

        	if ($i % 5 === 0) {
        		$output .= "Hubs";
        	}

        	if (empty($output)) {
        		$output = (string) $i;
        	}

        	$output .= "\\n";
        	$result .= $output;
        }

        return $result;
    }

    public function visualizarLista()
    {
    	print($this->apply(16));
    }
}
