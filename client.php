<?php



/* Создаем новый контекст */
$context = new ZMQContext();
echo "step1\n";
/* Создаем новый сокет */
$socket = $context->getSocket(ZMQ::SOCKET_REQ, 'tcp://*:5551');
echo "step2\n";
/* Соединяемся с сокетом */
$socket->connect("tcp://localhost:5555");
echo "step3\n";
/* Посылаем запрос */
$socket->send("Hello there");
echo "step4\n";
/* Получаем ответ */
$message = $socket->recv();
print_r($message);
echo "step5\n";
