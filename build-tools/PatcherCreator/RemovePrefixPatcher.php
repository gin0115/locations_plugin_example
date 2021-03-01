<?php

namespace pxlrbt\PhpScoper\PrefixRemover;

class RemovePrefixPatcher
{
    public function __construct($identifiers)
    {
        $this->identifiers = $identifiers;
    }

    public function __invoke($filePath, $prefix, $content)
    {
        $prefixDoubleSlashed = str_replace('\\', '\\\\', $prefix);
        $quotes = ['\'', '"', '`'];

        foreach ($this->identifiers as $identifier) {
            dd($identifier);
            $identifierDoubleSlashed = str_replace('\\', '\\\\', $identifier->name);
            $content = str_replace($prefix . '\\' . $identifier->name, $identifier->name, $content); // "PREFIX\foo()", or "foo extends nativeClass"

            // Replace in strings, e. g.  "if( function_exists('PREFIX\\foo') )"
            foreach ($quotes as $quote) {
                $content = str_replace(
                    $quote . $prefixDoubleSlashed . '\\\\' . $identifierDoubleSlashed . $quote,
                    $quote . $identifierDoubleSlashed . $quote,
                    $content
                );
            }
        }

        return $content;
    }
}
