<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of comentari
 *
 * @author Racso
 */
class comentari {
    public $idComentario;
    public $foro_id;
    public $autor_id;
    public $mensaje;
    public $nomAutor;
    
    function buscaAutor(){
        
    }
            
    function getIdComentario() {
        return $this->idComentario;
    }

    function getForo_id() {
        return $this->foro_id;
    }

    function getAutor_id() {
        return $this->autor_id;
    }

    function getMensaje() {
        return $this->mensaje;
    }

    function getNomAutor() {
        return $this->nomAutor;
    }

    function setIdComentario($idComentario) {
        $this->idComentario = $idComentario;
    }

    function setForo_id($foro_id) {
        $this->foro_id = $foro_id;
    }

    function setAutor_id($autor_id) {
        $this->autor_id = $autor_id;
    }

    function setMensaje($mensaje) {
        $this->mensaje = $mensaje;
    }

    function setNomAutor($nomAutor) {
        $this->nomAutor = $nomAutor;
    }
    
}
