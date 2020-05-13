<?php

namespace core;

class View
{
    function generate($content, $template, $data = null)
	{
		include ROOT.'/views/'.$template;
	}
}
