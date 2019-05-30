<?php
class useries {
    public function __construct($host, $user, $password, $db){
    $this->connection=new mysql ($host, $user, $password, $db);
    if (!$this->connection) {
        echo "Подключение не удалось";
    }
    }


    public function selectAll($sql) {
return  $this->connection->query($sql);
    }
}
