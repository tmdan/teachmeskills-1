<?php
\App\Components\Cookie::get($_COOKIE);
\App\Components\Cookie::set("name", "name", 3200);
\App\Components\Cookie::delete("name");