<?php
/**
 * Created by Maatify.dev
 * User: Maatify.dev
 * Date: 2024-07-08
 * Time: 12:31 PM
 * https://www.Maatify.dev
 */

namespace Maatify\DbLanguageHandler;


use Maatify\LanguageHandler\LanguageHandler;
use Maatify\Portal\Language\DbLanguage;

abstract class DbLanguageHandler extends LanguageHandler
{
    public function LanguageID(): int
    {
        if(empty($this->language_id)){
            $this->language_id = DbLanguage::obj()->GetCurrentLanguageId($this->lang);
        }
        return $this->language_id;
    }
}