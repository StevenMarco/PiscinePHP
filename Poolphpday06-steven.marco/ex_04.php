<?php
    function display_xml_nodes_data($xml, string $node) {
        foreach ($xml as $child) {
            
            if(file_exists($child) == true) {
                if($child == $node) {
                    echo "$node\n";
                    return true;
                }else{
                   display_xml_nodes_data($child, $node); // est que c'est le
                }
            }  return false;
        } 
    }

    function display_xml_nodes(string $xmlstr, string $node) {
        $xml = simplexml_load_string($xmlstr);
        display_xml_nodes_data($xml, $node);
    }



    // load_string ---> objet
    // fonction recursive 

    // parent --> enfant --> "name"