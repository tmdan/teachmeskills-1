<?php
\App\Components\Cookie::set("Romchik","Hello",1200);
var_dump(\App\Components\Cookie::get("Romchik"));
\App\Components\Cookie::delete("Romchik");
