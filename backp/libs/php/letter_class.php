<?php

class Letter
{

    public $slot_array = array(
        "slot slot-1 slot-xxl",
        "slot slot-2 slot-xl",
        "slot slot-3 slot-xl" ,
        "slot slot-4 slot-xxl",
        "slot slot-5 slot-xl",
        "slot slot-6 slot-l",
        "slot slot-7 slot-l",
        "slot slot-8 slot-l",
        "slot slot-10 slot-m",
        "slot slot-9 slot-m",
        "slot slot-11 slot-m",
        "slot slot-13 slot-m",
        "slot slot-12 slot-m",
        "slot slot-14 slot-m",
        "slot slot-15 slot-m",
        "slot slot-28 slot-m",
        "slot slot-16 slot-s",
        "slot slot-17 slot-s",
        "slot slot-18 slot-s",
        "slot slot-19 slot-s",
        "slot slot-20 slot-xs",
        "slot slot-21 slot-xs",
        "slot slot-22 slot-xs",
        "slot slot-23 slot-xxs",
        "slot slot-24 slot-xxs",
        "slot slot-25 slot-xxs",
        "slot slot-26 slot-xxs",
        "slot slot-27 slot-xxs",
        "slot slot-29 slot-xxs",
        "slot slot-30 slot-l",
        "slot slot-31 slot-xs",
        "slot slot-32 slot-xs"
    );

    protected $user_name;
    protected $user_email;
    protected $user_phone;
    protected $letter_data;

    protected $dbconfig = array(
        'host'=>'localhost',
        'user'=>'pechkine_let',
        'password'=>'fg3tg42gjk',
        'dbname'=>'pechkine_letters',
    );
    protected $db;

    const DEFAULT_EXCEPTION = ' is empty!';

    const LABEL_EMAIL = 'user_email';
    const LABEL_NAME = 'user_name';
    const LABEL_PHONE = 'user_phone';
    const LABEL_LETTER_DATA = 'letter_data';

    const CHECK_DATA = array(self::LABEL_NAME,self::LABEL_PHONE,self::LABEL_EMAIL,self::LABEL_LETTER_DATA);

    public function __construct($data = null)
    {
        try {
            $PDOsqlData = 'mysql:host='.$this->dbconfig['host'].';dbname='.$this->dbconfig['dbname'];
            $this->db = new PDO(
                $PDOsqlData,
                $this->dbconfig['user'],
                $this->dbconfig['password'],
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));


        } catch (PDOException $e) {
            $errorMessage = mb_convert_encoding($e->getMessage(),'utf8','cp1251');
            throw new Exception("Connection failed!: " . $errorMessage . "<br/>");
        }

        if(!empty($data)) {

            foreach (self::CHECK_DATA as $key)
            {
                if (empty($data[$key]))
                {
                    throw new Exception($key.self::DEFAULT_EXCEPTION);
                    break;
                }
                $this->$key = $data[$key];
            }


        }
    }
    public function getAllLetters()
    {
        $q_str = 'select * from letters order by id desc';

        try{
            $prepare = $this->db->prepare($q_str);
            $prepare->execute();
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e)
        {
            $errorMessage = mb_convert_encoding($e->getMessage(),'utf8','cp1251');
            throw new Exception("SQL ERROR: " . $errorMessage . "<br/>");
        }

        return $result;
    }
    public function getRandomLetters()
    {
        $q_str = 'select id from letters order by rand() limit 32';

        try{
            $prepare = $this->db->prepare($q_str);
            $prepare->execute();
            $result_ids = $prepare->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e)
        {
            $errorMessage = mb_convert_encoding($e->getMessage(),'utf8','cp1251');
            throw new Exception("SQL ERROR: " . $errorMessage . "<br/>");
        }

        $ids = array();

        foreach($result_ids as $row)
        {
            $ids[] = $row['id'];
        }

        $idstring = implode(',',$ids);

        $q_str = 'select user_name,letter_data from letters where id in ('.$idstring.')';
        try{
            $prepare = $this->db->prepare($q_str);
            $prepare->execute();
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e)
        {
            $errorMessage = mb_convert_encoding($e->getMessage(),'utf8','cp1251');
            throw new Exception("SQL ERROR: " . $errorMessage . "<br/>");
        }

        return $result;
    }
    public function removeLetter($id)
    {
        $q_str = 'delete from letters where id = :id';

        try{
            $prepare = $this->db->prepare($q_str);
            $prepare->bindParam(':id',$id,PDO::PARAM_INT);
            $prepare->execute();
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e)
        {
            $errorMessage = mb_convert_encoding($e->getMessage(),'utf8','cp1251');
            throw new Exception("SQL ERROR: " . $errorMessage . "<br/>");
        }

        return $result;
    }
    protected function isUserExist()
    {
        $q_str = 'select id from letters where user_email = :email';

        try{

            $prepare = $this->db->prepare($q_str);

            $prepare->bindValue(':email', $this->user_email, PDO::PARAM_STR);
            $prepare->execute();
            $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e)
        {
            $errorMessage = mb_convert_encoding($e->getMessage(),'utf8','cp1251');
            throw new Exception("SQL ERROR: " . $errorMessage . "<br/>");
        }

        return $result;
    }
    public function saveDataToDB()
    {
        if(!empty($this->isUserExist())) throw new Exception('Вы уже учавствовали в создании!');

        $q_str = 'insert into letters (user_email, user_name, user_phone, letter_data) VALUES (:email,:name,:phone,:letter_data)';

        $this->letter_data = json_encode($this->letter_data);
        try{

            $prepare = $this->db->prepare($q_str);

            $prepare->bindValue(':email', $this->user_email, PDO::PARAM_STR);
            $prepare->bindValue(':name', $this->user_name, PDO::PARAM_STR);
            $prepare->bindValue(':phone', $this->user_phone, PDO::PARAM_STR);
            $prepare->bindValue(':letter_data', $this->letter_data, PDO::PARAM_STR);

            $prepare->execute();
        }
        catch (PDOException $e)
        {
            $errorMessage = mb_convert_encoding($e->getMessage(),'utf8','cp1251');
            throw new Exception("SQL ERROR: " . $errorMessage . "<br/>");
        }
    }

}
//    public function getHtmlSlots()
//    {
//        $index = file_get_contents('index.html');
//
//        preg_match_all('/slot\sslot\-\d{1,2}\sslot\-\w{1,3}/',$index,$matches,PREG_PATTERN_ORDER);
//
//        return $matches[0];
//
//    }

//            $randomLetters = '';
//            try{
//                $randomLetters = $this->getRandomLetters();
//            }
//            catch (Exception $e){
//                echo $e->getMessage();
//            }
//            exit(json_encode($randomLetters));