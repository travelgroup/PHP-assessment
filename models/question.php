<?php

namespace interview;

class Question
{

    public $id;
    public $name;
    public $text;
    public $answer;
    public $created;

    public $tableName = 'questions';
    const      TABLENAME = 'questions';

    public function __construct($questionId, Database $db)
    {
		
        $sql  = "SELECT * FROM `questions` WHERE `id` = '" . $questionId . "' LIMIT 1;";

        $result = $db->getArray($sql);

		if ($result !== false && count($result) > 0) {
			$this->id      = $questionId;
			$this->name    = $result[0]['name'];
			$this->text    = $result[0]['text'];
			$this->answer  = $result[0]['answer'];
			$this->created = $result[0]['created'];
		} else {
			// Handle the case where no rows are found
			// For example, you might throw an exception or set default values
			print_r("No question found with ID: $questionId");
		}

    }
    //--------------------------------------------------------------------------


    public static function getNameById($questionId, Database $db)
    {
        $sql = "SELECT `name` FROM `" . self::TABLENAME . "` WHERE `id` = '" . $questionId . "' LIMIT 1;";
        $result = $db->getArray($sql);

		if ($result !== false && count($result) > 0) {
			return $result[0]['name'];
		} else {
			// Handle the case where no rows are found
			// For example, you might throw an exception or set default values
			return '';
		}
		
       // return $result[0]['name'];
    }
    //--------------------------------------------------------------------------


    public static function getTextById($questionId, Database $db)
    {
        $sql = "SELECT `text` FROM `" . self::TABLENAME . "` WHERE `id` = '" . $questionId . "' LIMIT 1;";
        $result = $db->getArray($sql);

		if ($result !== false && count($result) > 0) {
			return $result[0]['text'];
		} else {
			// Handle the case where no rows are found
			// For example, you might throw an exception or set default values
			return '';
		}
		
       // return $this->text;
    }
    //--------------------------------------------------------------------------


    public static function getAnswerById($questionId, Database $db)
    {
        $sql = "SELECT `answer` FROM `" . self::TABLENAME . "` WHERE `id` = '" . $questionId . "' LIMIT 1;";
        $result = $db->getArray($sql);

		if ($result !== false && count($result) > 0) {
			return $result[0]['answer'];
		} else {
			// Handle the case where no rows are found
			// For example, you might throw an exception or set default values
			return '';
		}
		
		
        //return $result[0]['answer'];
    }
    //--------------------------------------------------------------------------


    public static function getCreatedById($questionId, Database $db)
    {
        $sql = "SELECT `created` FROM `" . self::TABLENAME . "` WHERE `id` = '" . $questionId . "' LIMIT 1;";
        $result = $db->getArray($sql);

		if ($result !== false && count($result) > 0) {
			return $result[0]['created'];
		} else {
			// Handle the case where no rows are found
			// For example, you might throw an exception or set default values
			return '';
		}
		
       // return $result[0]['created'];
    }
    //--------------------------------------------------------------------------


    public static function addQuestion($questionName, $questionText, $questionAnswer, Database $db)
    {
        $columns = array(
            'name',
            'text',
            'answer'
        );

        $data = array(
            $questionName,
            $questionText,
            $questionAnswer
        );

        $db->insert(self::TABLENAME, $columns, $data);

        return true;
    }
    //--------------------------------------------------------------------------
}