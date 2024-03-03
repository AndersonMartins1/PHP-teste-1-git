<?php
// Definindo uma classe chamada FileManager
class FileManager {
    private $filename;

    // Método construtor para inicializar o nome do arquivo
    public function __construct($filename) {
        $this->filename = $filename;
    }

    // Método para ler o conteúdo do arquivo
    public function read() {
        return file_get_contents($this->filename);
    }

    // Método para escrever conteúdo no arquivo
    public function write($content) {
        file_put_contents($this->filename, $content);
    }
}

// Criando uma instância da classe FileManager com o nome do arquivo 'example.txt'
$fileManager = new FileManager('example.txt');

// Escrevendo conteúdo no arquivo 'example.txt'
$fileManager->write('Este é um exemplo de conteúdo que será escrito no arquivo.');

// Lendo o conteúdo do arquivo 'example.txt'
$content = $fileManager->read();

// Exibindo o conteúdo lido do arquivo
echo $content;
?>
