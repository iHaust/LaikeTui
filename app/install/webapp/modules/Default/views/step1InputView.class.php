<?php/** * [Laike System] Copyright (c) 2017-2020 laiketui.com * Laike is not a free software, it under the license terms, visited http://www.laiketui.com/ for more details. */class step1InputView extends SmartyView{    public function execute ()    {    	$request = $this->getContext()->getRequest();		$this->setAttribute("func",$request->getAttribute("func"));		$this->setAttribute("files",$request->getAttribute("files"));		$this->setAttribute("functions",$request->getAttribute("functions"));        $this->setTemplate('step1.tpl');    }}