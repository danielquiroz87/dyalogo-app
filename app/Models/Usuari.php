<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuari extends Model
{
    use HasFactory;

    //Sobrescribimos los valores de las columnas por unas mas bonitas
    public function getIdAttribute(){
    	
    	return $this->attributes['USUARI_ConsInte__b'];
    }
    public function getNombreAttribute(){
    	
    	return $this->attributes['USUARI_Nombre____b'];
    }
    
    public function getCorreoAttribute(){
    	
    	return $this->attributes['USUARI_Correo___b'];
    }

    public function getCargoAttribute(){
    	
    	return $this->attributes['USUARI_Cargo_____b'];
    }

    public function getIdentificacionAttribute(){
    	
    	return $this->attributes['USUARI_Identific_b'];
    }

    public function getFotoAttribute(){
    	
    	return $this->attributes['USUARI_Foto______b'];
    }

    public function getPasswordAttribute(){
    	
    	return $this->attributes['USUARI_Clave_____b'];
    }

    public function getLunesHoraInicialAttribute(){
    	
    	return $this->attributes['USUARI_HorIniLun_b'];
    }

    public function getLunesHoraFinalAttribute(){
    	
    	return $this->attributes['USUARI_HorFinLun_b'];
    }

    public function getMartesHoraInicialAttribute(){
    	
    	return $this->attributes['USUARI_HorIniMar_b'];
    }

    public function getMartesHoraFinalAttribute(){
    	
    	return $this->attributes['USUARI_HorFinMar_b'];
    }

    public function getMiercolesHoraInicialAttribute(){
    	
    	return $this->attributes['USUARI_HorIniMie_b'];
    }

    public function getMiercolesHoraFinalAttribute(){
    	
    	return $this->attributes['USUARI_HorFinMie_b'];
    }

    public function getJuevesHoraInicialAttribute(){
    	
    	return $this->attributes['USUARI_HorIniJue_b'];
    }

    public function getJuevesHoraFinalAttribute(){
    	
    	return $this->attributes['USUARI_HorFinJue_b'];
    }

    public function getViernesHoraInicialAttribute(){
    	
    	return $this->attributes['USUARI_HorIniVie_b'];
    }

    public function getViernesHoraFinalAttribute(){
    	
    	return $this->attributes['USUARI_HorFinVie_b'];
    }

    public function getSabadoHoraInicialAttribute(){
    	
    	return $this->attributes['USUARI_HorIniSab_b'];
    }

    public function getSabadoHoraFinalAttribute(){
    	
    	return $this->attributes['USUARI_HorFinSab_b'];
    }

    public function getDomingoHoraInicialAttribute(){
    	
    	return $this->attributes['USUARI_HorIniDom_b'];
    }

    public function getDomingoHoraFinalAttribute(){
    	
    	return $this->attributes['USUARI_HorFinDom_b'];
    }

    public function getFestivoHoraInicialAttribute(){
    	
    	return $this->attributes['USUARI_HorIniFes_b'];
    }

    public function getFestivoHoraFinalAttribute(){
    	
    	return $this->attributes['USUARI_HorFinFes_b'];
    }

    public function setNombreAttribute($value){
        
         $this->attributes['USUARI_Nombre____b']=$value;
    }
    
    public function setCorreoAttribute($value){
        
         $this->attributes['USUARI_Correo___b']=$value;
    }

    public function setCargoAttribute($value){
        
         $this->attributes['USUARI_Cargo_____b']=$value;
    }

    public function setIdentificacionAttribute($value){
        
         $this->attributes['USUARI_Identific_b']=$value;
    }

    public function setFotoAttribute($value){
        
         $this->attributes['USUARI_Foto______b']=$value;
    }

    public function setPasswordAttribute($value){
        
         $this->attributes['USUARI_Clave_____b']=$value;
    }

    public function setLunesHoraInicialAttribute($value){
        
         $this->attributes['USUARI_HorIniLun_b']=$value;
    }
    
    public function setLunesHoraFinalAttribute($value){
        
         $this->attributes['USUARI_HorFinLun_b']=$value;
    }

    public function setMartesHoraInicialAttribute($value){
        
         $this->attributes['USUARI_HorIniMar_b']=$value;
    }

    public function setMartesHoraFinalAttribute($value){
        
         $this->attributes['USUARI_HorFinMar_b']=$value;
    }

    public function setMiercolesHoraInicialAttribute($value){
        
         $this->attributes['USUARI_HorIniMie_b']=$value;
    }

    public function setMiercolesHoraFinalAttribute($value){
        
         $this->attributes['USUARI_HorFinMie_b']=$value;
    }

    public function setJuevesHoraInicialAttribute($value){
        
         $this->attributes['USUARI_HorIniJue_b']=$value;
    }

    public function setJuevesHoraFinalAttribute($value){
        
         $this->attributes['USUARI_HorFinJue_b']=$value;
    }

    public function setViernesHoraInicialAttribute($value){
        
         $this->attributes['USUARI_HorIniVie_b']=$value;
    }

    public function setViernesHoraFinalAttribute($value){
        
         $this->attributes['USUARI_HorFinVie_b']=$value;
    }

    public function setSabadoHoraInicialAttribute($value){
        
         $this->attributes['USUARI_HorIniSab_b']=$value;
    }

    public function setSabadoHoraFinalAttribute($value){
        
         $this->attributes['USUARI_HorFinSab_b']=$value;
    }

    public function setDomingoHoraInicialAttribute($value){
        
         $this->attributes['USUARI_HorIniDom_b']=$value;
    }

    public function setDomingoHoraFinalAttribute($value){
        
         $this->attributes['USUARI_HorFinDom_b']=$value;
    }

    public function setFestivoHoraInicialAttribute($value){
        
         $this->attributes['USUARI_HorIniFes_b']=$value;
    }

    public function setFestivoHoraFinalAttribute($value){
        
         $this->attributes['USUARI_HorFinFes_b']=$value;
    }

    protected $table = 'USUARI';
    protected $primaryKey = 'USUARI_ConsInte__b';


    protected $fillable = [
        'USUARI_Nombre____b',
        'USUARI_Correo___b',
        'USUARI_Cargo_____b',
        'USUARI_Identific_b',
        'USUARI_Foto______b',
        'USUARI_Clave_____b',
        'USUARI_HorIniLun_b',
		'USUARI_HorFinLun_b',
		'USUARI_HorIniMar_b',
		'USUARI_HorFinMar_b',
		'USUARI_HorIniMie_b',
		'USUARI_HorFinMie_b',
		'USUARI_HorIniJue_b',
		'USUARI_HorFinJue_b',
		'USUARI_HorIniVie_b',
		'USUARI_HorFinVie_b',
		'USUARI_HorIniSab_b',
		'USUARI_HorFinSab_b',
		'USUARI_HorIniDom_b',
		'USUARI_HorFinDom_b',
		'USUARI_HorIniFes_b',
		'USUARI_HorFinFes_b'
    ];


    protected $maps = [
      'id'=>'USUARI_ConsInte__b',	
	  'nombre'=>'USUARI_Nombre____b',
	  'cargo'=>'USUARI_Cargo_____b',
	  'identificacion'=>'USUARI_Identific_b',
	  'foto'=>'USUARI_Foto______b',
	  'correo'=>'USUARI_Correo___b',
	  'password'=>'USUARI_Clave_____b',
	    'lunes_hora_inicial'=>'USUARI_HorIniLun_b',
		'lunes_hora_final'=>'USUARI_HorFinLun_b',
		'martes_hora_inicial'=>'USUARI_HorIniMar_b',
		'martes_hora_final'=>'USUARI_HorFinMar_b',
		'miercoles_hora_inicial'=>'USUARI_HorIniMie_b',
		'miercoles_hora_final'=>'USUARI_HorFinMie_b',
		'jueves_hora_inicial'=>'USUARI_HorIniJue_b',
		'jueves_hora_final'=>'USUARI_HorFinJue_b',
		'viernes_hora_inicial'=>'USUARI_HorIniVie_b',
		'viernes_hora_final'=>'USUARI_HorFinVie_b',
		'sabado_hora_inicial'=>'USUARI_HorIniSab_b',
		'sabado_hora_final'=>'USUARI_HorFinSab_b',
		'domingo_hora_inicial=>USUARI_HorIniDom_b',
		'domingo_hora_final'=>'USUARI_HorFinDom_b',
		'festivo_hora_inicial'=>'USUARI_HorIniFes_b',
		'festivo_hora_final'=>'USUARI_HorFinFes_b'
	];

	protected $appends = ['id','nombre', 'cargo','identificacion','foto','correo','password','lunes_hora_inicial','lunes_hora_final','martes_hora_inicial','martes_hora_final','miercoles_hora_inicial','miercoles_hora_final','jueves_hora_inicial','jueves_hora_final','viernes_hora_inicial','viernes_hora_final','sabado_hora_inicial','sabado_hora_final','domingo_hora_inicial','domingo_hora_final','festivo_hora_inicial'=>'festivo_hora_final'
	];

	protected $hidden = [
		'USUARI_ConsInte__b',
        'USUARI_Nombre____b',
        'USUARI_Correo___b',
        'USUARI_Cargo_____b',
        'USUARI_Identific_b',
        'USUARI_Foto______b',
        'USUARI_Clave_____b',
        'USUARI_HorIniLun_b',
		'USUARI_HorFinLun_b',
		'USUARI_HorIniMar_b',
		'USUARI_HorFinMar_b',
		'USUARI_HorIniMie_b',
		'USUARI_HorFinMie_b',
		'USUARI_HorIniJue_b',
		'USUARI_HorFinJue_b',
		'USUARI_HorIniVie_b',
		'USUARI_HorFinVie_b',
		'USUARI_HorIniSab_b',
		'USUARI_HorFinSab_b',
		'USUARI_HorIniDom_b',
		'USUARI_HorFinDom_b',
		'USUARI_HorIniFes_b',
		'USUARI_HorFinFes_b'
    ];

    public $timestamps = false;



}
