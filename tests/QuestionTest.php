<?php

require_once __DIR__ . "/../boot.php";

class QuestionTest extends \PHPUnit\Framework\TestCase
{
    public function testModelLoaded()
    {
        $this->assertInstanceOf('\models\Question', new \Models\Question(1, new \Core\Database));
    }
    //--------------------------------------------------------------------------


    public function testInstantiationById()
    {
        $question = new \Models\Question(1, new \Core\Database);

        $this->assertNotEmpty($question->name);
        $this->assertNotEmpty($question->text);
        $this->assertNotEmpty($question->answer);
        $this->assertNotEmpty($question->created);
    }
    //--------------------------------------------------------------------------


    public function testStaticGetNameById()
    {
        $this->assertNotEmpty(\models\Question::getNameById(1, new \Core\Database));
    }
    //--------------------------------------------------------------------------


    public function testStaticGetTextById()
    {
        $this->assertNotEmpty(\models\Question::getTextById(1, new \Core\Database));
    }
    //--------------------------------------------------------------------------


    public function testStaticGetAnswerById()
    {
        $this->assertNotEmpty(\models\Question::getAnswerById(1, new \Core\Database));
    }
    //--------------------------------------------------------------------------


    public function testStaticGetCreatedById()
    {
        $this->assertNotEmpty(\models\Question::getCreatedById(1, new \Core\Database));
    }
    //--------------------------------------------------------------------------


    public function testQuestionsAnswered()
    {
        $this->assertNotEmpty(\models\Question::getAnswerById(1, new \Core\Database));
        $this->assertNotEmpty(\models\Question::getAnswerById(2, new \Core\Database));
        $this->assertNotEmpty(\models\Question::getAnswerById(3, new \Core\Database));
    }
    //--------------------------------------------------------------------------
}
