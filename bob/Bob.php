<?php
class Bob
{
    public static function respondTo(string $sentence): string
    {
        $msgFormatada = trim($sentence);
        $gritando = self::gritando($msgFormatada);
        $perguntando = self::perguntando($msgFormatada);

        if (strlen($msgFormatada) == 0) {
            return 'Fine. Be that way!';
        }
        if ($gritando && $perguntando) {
            return 'Calm down, I know what I\'m doing!';
        }
        if ($perguntando) {
            return 'Sure.';
        }
        if ($gritando) {
            return 'Whoa, chill out!';
        }
        return 'Whatever.';
    }

    private static function gritando(string $sentence): bool
    {
        return preg_match('/\pL/', $sentence) && strtoupper($sentence) == $sentence;
    }

    private static function perguntando(string $sentence): bool
    {
        return substr($sentence, -1) == '?';
    }
}
