<!-- Create una nuova classe che rappresenti un Pokemon e che abbia almeno cinque proprieta, tre metodi ed il costruttore.
Microbonus: creo un'altra classe che aggiungo al pokemon per composizione che configuri il tipo di pokemon (aria, terra, ecc.) -->

<?php
class Pokemon
{

    private $nome;
    private $tipo;
    private $livello;
    private $evoluzione;
    private $mosse;

    public function __construct($_nome, $_tipo, $_livello, $_evoluzione, $_mosse)
    {
        $this->nome = $_nome;
        $this->tipo = $_tipo;
        $this->livello = $_livello;
        $this->evoluzione = $_evoluzione;
        $this->mosse = $_mosse;
    }
    public function info() {
        echo "Nome: {$this->nome};
        echo "Tipo: {$this->tipo};
        echo "Livello: {$this->livello};
        echo "Evoluzione: {$this->evoluzione};
        echo "Mosse: {$this->mosse};
    }

}

?>