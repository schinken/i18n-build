<?php

    namespace Tholabs\I18nBuild\Tokens;

    class Text implements Tokenized {

        private string $body;

        function __construct (string $body) {
            $this->body = $body;
        }

        function getBody () : string {
            return $this->body;
        }

    }