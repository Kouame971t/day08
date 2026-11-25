<?php
class SecretBox
{
    private string $secret = "This is a secret.";

    public function reveal(): void
    {
        echo $this->secret;
    }
}
