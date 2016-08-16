<?php

namespace Nasution;

class LangDetector
{
    protected $ISO_639_1;
    protected $ISO_639_2T;
    protected $ISO_639_2B;
    protected $ISO_639_3;
    protected $ISO_639_6;

    public static function detect()
    {
        if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
        {
            return substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        }

        return null;
    }

    public function ISO_639_1()
    {
        //
    }

    public function ISO_639_2T()
    {
        //
    }

    public function ISO_639_2B()
    {
        //
    }

    public function ISO_639_3()
    {
        //
    }

    public function ISO_639_6()
    {
        //
    }
}
