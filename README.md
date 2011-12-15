# UID Generator library

Provides object-oriented method for generating UUID.

# LIBRARY API NOT STABLE

Requirements:

* PHP >= 5.3

eg:
	
	<?php
		// Do this so it can find the classes needed
        spl_autoload_register(function($class) {
            $classFile = str_replace('\\', '/', $class);
            require_once __DIR__ . '/library/' . $classFile . '.php';
        });
        
        // Create generator and adapter
        $generator = new Uuid\Generator();
        $adapter = new Uuid\Adapter\PhpExtensionAdapter();
        
		// Generate UUID
		echo generator->generate($adapter);
	?>

## CHANGELOG

* 0.1.0 
    NOT STABLE The public version, The public version

## LICENCE

Released under the MIT Licence

Copyright (c) 2011 Pavel Gopanenko  

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
