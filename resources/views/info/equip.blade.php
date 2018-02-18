@extends('layout.template')
@section('content')








    <div class="container-fluid bg-3 text-center">
        <h3>L'equip</h3>

        <div class="row">

            <div class="col-sm-12 text-left" >
                <h3>Junta</h3>
                <hr width="520"></hr>
                <div id="junta">
                    <table>
                        <tr>
                            <td>
                                <table cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>
                                            <div style="width:120px; height:190px; position:absolute; background-color:#FFF; display:none; cursor:pointer; z-index:100;" id="cuadro_1" onMouseout="show('cuadro_1');">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <p>Gesti&oacute; de socis. A la Protectora des del any 1999 com a soci i voluntari.</p>
                                                            <p><em>Inform&agrave;tic. Responsable d'automatitzaci&oacute; en una empresa multinacional.</em></p>                </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <img src="http://protectorasabadell.s3.amazonaws.com/junta/Narcis_1.jpg" width="120" height="190" onMouseover="show('cuadro_1');"  onmousemove="show('cuadro_1');" style="cursor:pointer; z-index:0;"></td>

                                    </tr>
                                    <tr>
                                        <td id="texto1">Narcís Sirvent</td>
                                    </tr>
                                    <tr>
                                        <td id="texto2">President</td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>
                                            <div style="width:120px; height:190px; position:absolute; background-color:#FFF; display:none; cursor:pointer; z-index:100;" id="cuadro_6" onMouseout="show('cuadro_6');">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <p>Manteniment del refugi.<br />A la Protectora des del 1998.</p>
                                                            <p><em>Empleat de banca.</em></p>                </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <img src="http://protectorasabadell.s3.amazonaws.com/junta/Luis.jpg" width="120" height="190" onMouseover="show('cuadro_6');"  onmousemove="show('cuadro_6');" style="cursor:pointer; z-index:0;"></td>

                                    </tr>
                                    <tr>
                                        <td id="texto1">Lluís Pont</td>
                                    </tr>
                                    <tr>
                                        <td id="texto2">Vicepresident</td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>
                                            <div style="width:120px; height:190px; position:absolute; background-color:#FFF; display:none; cursor:pointer; z-index:100;" id="cuadro_15" onMouseout="show('cuadro_15');">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <p>A la Protectora des del 2009.</p>
                                                            <p>Membre de l'Equip Padrins.</p>
                                                            <p><em>Administrativa</em>.</p>                </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <img src="http://protectorasabadell.s3.amazonaws.com/junta/nuria_paris.jpg" width="120" height="190" onMouseover="show('cuadro_15');"  onmousemove="show('cuadro_15');" style="cursor:pointer; z-index:0;"></td>

                                    </tr>
                                    <tr>
                                        <td id="texto1">Nuria Paris</td>
                                    </tr>
                                    <tr>
                                        <td id="texto2">Secretària</td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>
                                            <div style="width:120px; height:190px; position:absolute; background-color:#FFF; display:none; cursor:pointer; z-index:100;" id="cuadro_10" onMouseout="show('cuadro_10');">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <p>Gesti&oacute; del refugi caps de setmana.<br />Atenci&oacute; al p&uacute;blic. A la Protectora des del 1995.</p>
                                                            <p><em><br /></em></p>                </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <img src="http://protectorasabadell.s3.amazonaws.com/junta/Bienve.jpg" width="120" height="190" onMouseover="show('cuadro_10');"  onmousemove="show('cuadro_10');" style="cursor:pointer; z-index:0;"></td>

                                    </tr>
                                    <tr>
                                        <td id="texto1">Bienve González</td>
                                    </tr>
                                    <tr>
                                        <td id="texto2">Tresorera</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="10" colspan="4"></td>
                        </tr>
                        <tr>
                            <td>
                                <table cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>
                                            <div style="width:120px; height:190px; position:absolute; background-color:#FFF; display:none; cursor:pointer; z-index:100;" id="cuadro_4" onMouseout="show('cuadro_4');">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <p>A la Protectora des del 1996.</p>
                                                            <p><em>Professora.</em></p>                </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <img src="http://protectorasabadell.s3.amazonaws.com/junta/Adela.jpg" width="120" height="190" onMouseover="show('cuadro_4');"  onmousemove="show('cuadro_4');" style="cursor:pointer; z-index:0;"></td>

                                    </tr>
                                    <tr>
                                        <td id="texto1">Adela Gracia</td>
                                    </tr>
                                    <tr>
                                        <td id="texto2">Vocal</td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>
                                            <div style="width:120px; height:190px; position:absolute; background-color:#FFF; display:none; cursor:pointer; z-index:100;" id="cuadro_12" onMouseout="show('cuadro_12');">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <p>Enlla&ccedil; amb l'Equip Padrins.</p>
                                                            <p>A la Protectora des del 2008.</p>
                                                            <p><em>Administrativa</em>.</p>                </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <img src="http://protectorasabadell.s3.amazonaws.com/junta/monica_junta_1.jpg" width="120" height="190" onMouseover="show('cuadro_12');"  onmousemove="show('cuadro_12');" style="cursor:pointer; z-index:0;"></td>

                                    </tr>
                                    <tr>
                                        <td id="texto1">Monica Jordà</td>
                                    </tr>
                                    <tr>
                                        <td id="texto2">Vocal</td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>
                                            <div style="width:120px; height:190px; position:absolute; background-color:#FFF; display:none; cursor:pointer; z-index:100;" id="cuadro_16" onMouseout="show('cuadro_16');">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <p>Equip de Passejadas.</p>
                                                            <p>A la Protectora des del 2015.</p>
                                                            <p><em>Secret&agrave;ria</em>.</p>
                                                            <p>&nbsp;</p>
                                                            <p>&nbsp;</p>                </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <img src="http://protectorasabadell.s3.amazonaws.com/junta/imma_manrique_web.jpg" width="120" height="190" onMouseover="show('cuadro_16');"  onmousemove="show('cuadro_16');" style="cursor:pointer; z-index:0;"></td>

                                    </tr>
                                    <tr>
                                        <td id="texto1">Imma Manrique</td>
                                    </tr>
                                    <tr>
                                        <td id="texto2">Vocal</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
                <h3>Treballadors</h3>
                <hr width="520">  </hr>
                <div>
                    <p><strong><span style="color: #ff0000;"><span style="font-size: small;">Equip Veterinari &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br /></span></span></strong></p>
                    <p><span style="font-size: medium;"><br /></span></p>
                    <p><span style="font-size: medium;"><span style="font-size: x-small;"> </span></span></p>
                    <p><span style="font-size: x-small;">Claudia Rebollar, Veterinari (matins)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="font-size: x-small;"><span style="font-size: x-small;">Miriam Nieto, Veterinari (tardes) <br /></span></span></p>
                    <p><span style="font-size: x-small;"> </span></p>
                    <p><span style="font-size: x-small;"><img title="Claudia Rebollar" src="http://protectorasabadell.s3.amazonaws.com/imagenes/claudia_rebollar_web.jpg" alt="Claudia Rebollar" width="200" height="267" />&nbsp;&nbsp; <img title="Miriam Nieto" src="http://protectorasabadell.s3.amazonaws.com/imagenes/miriam_nieto4.jpg" alt="Miriam Nieto" width="200" height="266" /></span></p>
                    <p><span style="font-size: x-small;"> <br />Cristina Raya, ATV </span></p>
                    <p><img title="Cris Raya" src="http://protectorasabadell.s3.amazonaws.com/imagenes/cris_raya_web.jpg" alt="Cris Raya" width="200" height="252" /></p>
                    <p><span style="font-size: medium;"><span style="font-size: x-small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br /></span></span></p>
                    <p><span style="font-size: medium;"><span style="font-size: x-small;">&nbsp;</span></span></p>
                    <p><strong><span style="color: #ff0000;"><span style="font-size: small;">Equip Manteniment</span></span></strong></p>
                    <p><strong><span style="color: #ff0000;"><span style="font-size: small;"><img title="trabajadores" src="http://protectorasabadell.s3.amazonaws.com/imagenes/foto_web_trabajadores_(copiar).jpg" alt="trabajadores" width="400" height="331" /></span></span></strong>&nbsp;</p>
                    <p><span style="font-size: medium;"><span style="font-size: x-small;">&nbsp;Dieudonn&eacute; Ouedraogo, Lucio Caceres, <span style="font-size: medium;"><span style="font-size: x-small;">Francisco Moreno, Jos&eacute; Puerto</span></span><br /></span></span></p>
                    <p><span style="font-size: medium;"><span style="font-size: x-small;">&nbsp;</span></span></p>
                    <p><span style="font-size: small;"><span style="color: #ff0000;"><strong>Oficina&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gesti&oacute;</strong></span></span></p>
                    <p><span style="color: #ff0000;"><strong><img title="Mati" src="http://protectorasabadell.s3.amazonaws.com/imagenes/p1580661b.jpg" alt="Mati" width="200" height="150" /> &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; <img title="Claudia" src="http://protectorasabadell.s3.amazonaws.com/imagenes/claudia.jpg" alt="Claudia" width="120" height="190" /><br /></strong></span></p>
                    <p><span style="font-size: x-small;"><span style="color: #ff0000;"><span style="color: #000000;">Mati G&aacute;mez, Aux. Administraci&oacute;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Claudia Matheja, Gesti&oacute; Refugi i Treballadors<br /></span></span></span></p>
                    <p><span style="font-size: x-small;"> </span></p>
                    <p><span style="font-size: x-small;"><span style="color: #ff0000;"><span style="color: #000000;">Refugi&nbsp; matins&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Comunicaci&oacute;, Adopcions Alemanya</span></span></span></p>
                    <p><br /><span style="font-size: small;"><span style="color: #ff0000;"><strong>Adopcions</strong></span></span></p>
                    <p><span style="font-size: small;"><span style="color: #ff0000;"><strong><img title="Nuria Cortina" src="http://protectorasabadell.s3.amazonaws.com/imagenes/nuria_cortina_c.jpg" alt="Nuria Cortina" width="170" height="255" /></strong></span></span></p>
                    <p><span style="font-size: small;"><span style="color: #ff0000;"><span style="font-size: x-small;"><span style="color: #000000;">Nuria Cortina, Recepci&oacute; refugi tardes</span></span><br /></span></span></p>            	</div>
                <h3>Voluntaris</h3>
                <hr width="520"></hr>
                <div>
                    <p><span style="font-size: small;"><span style="color: #ff0000;"><strong>Coordinadors de voluntaris: </strong></span></span></p>
                    <p><span style="font-size: small;"><span style="color: #ff0000;"><strong><br /></strong></span></span></p>
                    <p><img title="Esmeralda" src="http://protectorasabadell.s3.amazonaws.com/imagenes/img_20160314_wa0009_copia.jpg" alt="Esmeralda" width="400" height="325" /></p>
                    <p><span style="color: #808080;">Esmeralda Salazar</span></p>
                    <p>&nbsp;</p>
                    <p><img title="Ester" src="http://protectorasabadell.s3.amazonaws.com/imagenes/ester_i_nuck_5_2016_copia.jpg" alt="Ester" width="400" height="300" /></p>
                    <p><span style="color: #808080;"> Ester Ferrer&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></p>
                    <p><span style="font-size: small; font-weight: bold; color: #ff0000;"> </span></p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><span style="color: #ff0000;"><strong><span style="text-decoration: underline;">VOLUNTARIS PROTECTORA</span></strong></span></p>
                    <p>&nbsp;</p>
                    <p>Aida&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; S&aacute;nchez</p>
                    <p>Aida&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tach&eacute;</p>
                    <p>Aida &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Juarez</p>
                    <p>Alejandro&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Vigil-escalera</p>
                    <p>Alex&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cobos</p>
                    <p>&Agrave;lex&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Franch</p>
                    <p>Altair&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Montsech</p>
                    <p>Ana&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cumillas</p>
                    <p>Ana&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Due&ntilde;as</p>
                    <p>Andrea&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ad&aacute;n</p>
                    <p>&Agrave;ngela&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Candial</p>
                    <p>Aniol &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Record&agrave;</p>
                    <p>Anna &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &Aacute;lvarez</p>
                    <p>Anna &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Busquets</p>
                    <p>Anna &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Campoy</p>
                    <p>Antonio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mayor</p>
                    <p>Arnau&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mu&ntilde;oz</p>
                    <p>Astrid&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Alonso&nbsp;</p>
                    <p>Barbara&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Montero</p>
                    <p>Beatriz&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Barcala</p>
                    <p>Berta&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Porcar</p>
                    <p>Carles&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Llaurad&oacute;</p>
                    <p>Carles&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Soto</p>
                    <p>Carlos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pe&ntilde;a</p>
                    <p>Carme&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Masllovet</p>
                    <p>Carolina&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Gonfaus</p>
                    <p>Cecilia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Garcia</p>
                    <p>Clara&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Selva</p>
                    <p>Claudia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Matheja&nbsp;</p>
                    <p>Cristina&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Carvajal</p>
                    <p>Cristina&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Raya&nbsp;&nbsp;</p>
                    <p>Daniel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nicol&aacute;s</p>
                    <p>Eduard&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Castro</p>
                    <p>Elena&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Puiggr&ograve;s</p>
                    <p>Elisabet&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Casas</p>
                    <p>Encarni&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Millena</p>
                    <p>Encarna&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mu&ntilde;oz</p>
                    <p>Enrique&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Garc&iacute;a</p>
                    <p>Esther&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mena</p>
                    <p>Eva&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Grande</p>
                    <p>Eva M&ordf;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nieto</p>
                    <p>Francesca&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Larrea</p>
                    <p>Gemma&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dalmau</p>
                    <p>Georgina&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Soley</p>
                    <p>Gl&ograve;ria&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Verdaguer</p>
                    <p>Isabel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Costa</p>
                    <p>Javier&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Alcantara</p>
                    <p>Jessica&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bolivar</p>
                    <p>Joan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Valls&nbsp;&nbsp;</p>
                    <p>Joan Carles&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Canals</p>
                    <p>Jordi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Exp&oacute;sito&nbsp;&nbsp;</p>
                    <p>Judit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Larios</p>
                    <p>Judit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pola</p>
                    <p>Judith&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bonafont</p>
                    <p>Lorena&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Villal&oacute;n</p>
                    <p>M&ordf; &Agrave;ngels &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Alonso</p>
                    <p>M&ordf; Rosa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sanrom&agrave;</p>
                    <p>Magda&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Vilanova</p>
                    <p>Maite &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Garcia</p>
                    <p>Marc&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bay&oacute;</p>
                    <p>Marc&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Chimeno</p>
                    <p>Marcelina &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Casals&nbsp;</p>
                    <p>Margarita &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sala</p>
                    <p>Marta &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Armengol</p>
                    <p>Marta &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Camargo</p>
                    <p>Marta &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; C&eacute;sar</p>
                    <p>Marta &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; C&iacute;vico</p>
                    <p>Marta &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Galera</p>
                    <p>Marta &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lluhen</p>
                    <p>Marta &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Riba</p>
                    <p>Mary&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lorente</p>
                    <p>Merc&egrave;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Romeu</p>
                    <p>Meritxell&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Beltran</p>
                    <p>Miquel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Montanera</p>
                    <p>Miriam&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fortes</p>
                    <p>Miriam Corina&nbsp;&nbsp;&nbsp;&nbsp; Neira</p>
                    <p>M&ograve;nica&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Font</p>
                    <p>Montse&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bueno&nbsp;</p>
                    <p>Nerea&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Escusa</p>
                    <p>Neus&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ferrer&nbsp;</p>
                    <p>Nicole&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Schreiber</p>
                    <p>Noelia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Casas</p>
                    <p>Noemi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Blanes</p>
                    <p>Noem&iacute;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sanchez</p>
                    <p>N&uacute;ria&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cortina</p>
                    <p>N&uacute;ria&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Crespo</p>
                    <p>N&uacute;ria&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Herrero</p>
                    <p>N&uacute;ria&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pastor</p>
                    <p>N&uacute;ria&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Vilardell</p>
                    <p>Ona&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Marcet</p>
                    <p>Oscar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Martinez</p>
                    <p>Patricia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rodriguez</p>
                    <p>Pau&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mart&iacute;</p>
                    <p>Paula&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mart&iacute;n</p>
                    <p>Pere&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Gomez</p>
                    <p>Raquel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Montoya</p>
                    <p>Remei &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ferrer</p>
                    <p>Rosa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Marcos&nbsp;</p>
                    <p>Rosa M&ordf;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bernat</p>
                    <p>Roser&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lorente</p>
                    <p>Sandra&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; G&oacute;mez</p>
                    <p>Sandra&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Soto</p>
                    <p>Santi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Perez</p>
                    <p>Sara&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Guadilla</p>
                    <p>Sergi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sanz</p>
                    <p>Sergio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Camino</p>
                    <p>Silvia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mu&ntilde;oz</p>
                    <p>Silvia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nicol&aacute;s</p>
                    <p>Silvia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Roca</p>
                    <p>Tamara&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jimenez</p>
                    <p>Teresa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bordas</p>
                    <p>Teresa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Miranda</p>
                    <p>Viviana &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Caama&ntilde;o</p>
                    <p>Xavi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bertran</p>
                    <p>Xavi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pinyol</p>
                    <p>Yolanda&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Perez&nbsp;</p>
                    <p>&nbsp;</p>                </div>
            </div>
        </div>

            </div>




        </div>

    </div>


    <div class="col-md-12 text-center">

        <div class="col-md-12 text-center">

            <a  href="{{ URL::previous() }}">Tornar</a>
        </div>

    </div>

@endsection