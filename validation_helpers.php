<?php

    /**
     * PHP Persian/Dari and Pashtu input validation useful snippets.
     *
     * @author      Abdul Rahman Sherzad (https://www.slideshare.net/absherzad)
     * @copyright   Creative Commons (CC)
     * @version     1.0
    */

    /**
     * This function determines if the input is a valid person name in Persian/Dari or Arabic.
     * The names are mainly used in Afghanistan and Iran.
     *
     * Usage: if( valid_persian_name("عبدالرحمن شیرزاد") ) { echo "Valid"; } else { echo "invalid"; }
     *
     * @param string $input
     *
     * @return boolean
    */
    function valid_persian_name($input)
    {
     if (!preg_match("/^([ا آ أ إ ب پ ت ث ج چ ح خ د ذ ر ز ژ س ش ص ض ط ظ ع غ ف ق ک ك گ ل م ن و ؤ ه ة ی ي ئ ء ّ َ ِ ُ ً ٍ ٌ ْ\x{200B}-\x{200D}\x{FEFF}\s])+$/u", $input) !== false) {
         return false;
        }
        return true;
    }
    
    /**
     * This function determines if the input is a valid person name in English and alike, Persian/Dari, Pashtu or Arabic.
     * This is useful where names in English, Persian/Dari, Pashtu or Arabic are acceptable.
     *
     * Usage: if( valid_eng_per_name("عبدالرحمن شیرزاد") ) { echo "Valid"; } else { echo "invalid"; }
     * Usage: if( valid_eng_per_name("Abdul Rahman Sherzad") ) { echo "Valid"; } else { echo "invalid"; }
     *
     * @param string $input
     *
     * @return boolean
    */
    function valid_eng_per_name($input)
    {
        if (!preg_match("/^([A-Za-zÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖßÙÚÛÜÝàáâãäåçèéêëìíîïñðòóôõöùúûüýÿ'\- ا آ أ إ ب پ ت ټ ث څ ج چ ح ځ خ د ډ ذ ر ړ ز ږ ژ س ش ښ ص ض ط ظ ع غ ف ق ک ګ ك گ ل م ن ڼ و ؤ ه ة ی ي ې ۍ ئ ؋ ء ّ َ ِ ُ ً ٍ ٌ ْ \x{200B}-\x{200D}\x{FEFF}\s])+$/u", $input) !== false) {
            return false;
        }
        return true;
    }
    
    /**
     * This function determines if the input is valid digits in Persian/Dari, Pashtu or Arabic format.
     *
     * Usage: if( valid_persian_digit("٤٠٥") ) { echo "Valid"; } else { echo "invalid"; }
     * Usage: if( valid_persian_digit("۴۰۵") ) { echo "Valid"; } else { echo "invalid"; }
     *
     * @param string/int $input
     *
     * @return boolean
    */
    function valid_persian_digit($input)
    {
        if (!preg_match("/^([۰۱۲۳۴۵۶۷۸۹٠١٢٣٤٥٦٧٨٩])+$/u", $input) !== false) {
            return false;
        }
        return true;
    }

    /**
     * This function determines if the input is valid digits including all formats.
     *
     * Usage: if( valid_digit("٤٠٥") ) { echo "Valid"; } else { echo "invalid"; }
     * Usage: if( valid_digit("۴۰۵") ) { echo "Valid"; } else { echo "invalid"; }
     * Usage: if( valid_digit("405") ) { echo "Valid"; } else { echo "invalid"; }
     *
     * @param string/int $input
     *
     * @return boolean
    */
    function valid_digit($input)
    {
        // "/^([٠١٢٣٤٥٦٧٨٩])+$/u" equal to "/^([\x{0660}-\x{0669}])+$/u"
        // "/^([۰۱۲۳۴۵۶۷۸۹])+$/u" equal to "/^([\x{06F0}-\x{06F9}])+$/u"
        
        if (!preg_match("/^([0-9\x{0660}-\x{0669}\x{06F0}-\x{06F9}])+$/u", $input) !== false) {
            return false;
        }
        return true;
    }
    
    
    /**
     * This function determines if the input is a valid text in Persian/Dari or Arabic language mainly used in Afghanistan and Iran.
     *
     * Usage: if( valid_persian_text("زگهواره تا گور دانش بجوی") ) { echo "Valid"; } else { echo "invalid"; }
     *
     * @param string $input
     *
     * @return boolean
    */
    function valid_persian_text($input)
    {
        // This pattern "/^([\x{0600}-\x{06FF}])+$/u" covers almost all persian and pashtu characters
        if (!preg_match("/^([ا آ أ إ ب پ ت ث ج چ ح خ د ذ ر ز ژ س ش ص ض ط ظ ع غ ف ق ک ك گ ل م ن و ؤ ه ة ی ي ئ ء ّ َ ِ ُ ً ٍ ٌ \. \/ \\ = \- \| \{ \} \[ \] ؛ : « » ؟ > < \+ \( \) \* ، × ٪ ٫ ٬ ! ۰۱۲۳۴۵۶۷۸۹٠١٢٣٤٥٦٧٨٩\x{200B}-\x{200D}\x{FEFF}\x{22}\x{27}\x{60}\x{B4}\x{2018}\x{2019}\x{201C}\x{201D}\x{201E}\x{201F}\x{2032}\x{2033}\s])+$/u", $input) !== false) {
            return false;
        }
        return true;
    }
    
    
    /**
     * This function determines if the input is a valid text in Pashtu language mainly used in Afghanistan.
     *
     * Usage: if( valid_pashtu_text("د ځانګو څخه تر ګوره د پوهی په لټه کی اوسه") ) { echo "Valid"; } else { echo "invalid"; }
     *
     * @param string $input
     *
     * @return boolean
    */
    function valid_pashtu_text($input)
    {
        // This pattern "/^([\x{0600}-\x{06FF}])+$/u" covers almost all persian and pashtu characters
        if (!preg_match("/^([ا آ أ ب پ ت ټ ث څ ج چ ح ځ خ د ډ ذ ر ړ ز ږ ژ س ش ښ ص ض ط ظ ع غ ف ق ک گ ګ ل م ن ڼ و ؤ ه ة ی ې ۍ ي ئ ء ْ ٌ ٍ ً ُ ِ َ ّ ؋ \. \/ \\ = \- \| \{ \} \[ \] ؛ : « » ؟ > < \+ \( \) \* ، × ٪ ٫ ٬ ! ۰۱۲۳۴۵۶۷۸۹٠١٢٣٤٥٦٧٨٩ \x{200B}-\x{200D}\x{FEFF}\x{22}\x{27}\x{60}\x{B4}\x{2018}\x{2019}\x{201C}\x{201D}\x{201E}\x{201F}\x{2032}\x{2033}\s])+$/u", $input) !== false) {
            return false;
        }
        return true;
    }
