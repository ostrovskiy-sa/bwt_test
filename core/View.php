<?php

namespace core;

class View
{
    function generate($content, $template, $data = null)
	{
		if(is_array($data)) {
			extract($data);
		}
		include ROOT.'/views/'.$template;
	}
}
