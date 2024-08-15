<?php 

class Livros{
    //atrib

    private $titulo;
    private $autor;
    private $genero;
    private $numPag;

        /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of numPag
     */
    public function getNumPag()
    {
        return $this->numPag;
    }

    /**
     * Set the value of numPag
     */
    public function setNumPag($numPag): self
    {
        $this->numPag = $numPag;

        return $this;
    }
}

function Comparacao($livro1, $livro2, $livro3){
    if($livro1 > $livro2 && $livro1 > $livro3){
        return $livro1;
}

if($livro2 > $livro1 && $livro2 > $livro3){
    return $livro2;
}

else{
    return $livro3;
}
} 

$livro1 = new Livros();
$livro1->setTitulo("Suicidas")->getAutor("Raphael Montes")->getGenero("Literatura Brasileira")->getNumPaginas(342);

$livro2 = new Livros();
$livro2->setTitulo("Jantar Secreto")->getAutor("Raphael Montes")->getGenero("Literatura Brasileira")->getNumPaginas(368);

$livro3 = new Livros();
$livro3->setTitulo("Dias Perfeitos")->getAutor("Raphael Montes")->getGenero("Literatura Brasileira")->getNumPaginas(280);