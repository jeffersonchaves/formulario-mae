<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Formulário HTML</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
        <style>
            .vermelho{
                background-color: rgb(235, 29, 29);
            }
            .laranja{
                background-color: rgb(241, 176, 34);
            }
            .amarelo{
                background-color: rgb(227, 241, 34);
            }
            .titulo{
                background-color: rgb(119, 231, 134);
            }
            .nacionais{
                background-color: rgb(13, 112, 112);
            }
            .cabecalho{
                background-color: rgb(168, 168, 161);
            }
            table,
            th,
            td {
                border: 3px solid rgb(241, 234, 234);
            }
        </style>
</head>
<body>

    <br>
            <table>
                <form method="post" action="mailto:enerluz.rh@gmail.com" enctype="multipart/form-data">
                <tbody>
                    <tr>
                        <th class="titulo" colspan="4"><b>Passo 1</b></th>
                    </tr>
    
                    <tr>
                        <td><label for=""> Nome: </label></td>
                        <td><input name="name" required="required" placeholder="Digite seu Nome" type="text"></td>
                    </tr>
      
                    <tr>
                        <td><label for=""> E-Mail: </label></td>
                        <td><input name="email" required="required" placeholder="Digite seu E-Mail" type="text"></td>
                    </tr>
    
                    <tr>
                        <td><label for=""> Setor Pretendido: </label></td>
                        <td>
                        <select required="required" name="Setor">
                            <option selected="selected" value="">Selecione</option>
                            <option value="1"> COMERCIAL </option>
                            <option value="2"> ADMINISTRATIVO </option>
                            <option value="3"> LOGÍSTIVO/ESTOQUE </option>
                            <option value="4"> OPERACIONAL (SERVIÇOS GERAIS) </option>
                        </select> </td>
                    </tr> </table>
                    </tbody></form>
          
    
             
             <br>
                     <table>
                         <tbody>

                            <form method="post" action="mailto: mariaehsb@gmail.com" enctype="multipart/form-data">
    
                             <tr>
                                 <th class="titulo" colspan="4"><b>Passo 2</b></th>
                             </tr>               
                             <tr>
                                <td><label for=""> Você já tem experiência na vaga desejada? </label></td>
                                <td><label for="sim1"><input name="sim1" id="sim1" value="s1" type="radio"> Sim </label>
                                    <label for="nao1"><input name="nao1" id="nao1" value="n1" type="radio"> Não </label></td>
                            </tr>
                            <tr>
                                <td><label for=""> Você possui cursos na área? </label></td>
                                <td><label for="sim2"><input name="sim2" id="sim2" value="s2" type="radio"> Sim </label>
                                    <label for="nao2"><input name="nao2" id="nao2" value="n2" type="radio"> Não </label></td>
                            </tr>
                            <tr>
                                <td><label for=""> Quanto a crescer na empresa, você aceita fazer cursos? </label></td>
                                <td><label for="sim3"><input name="sim3" id="sim3" value="s" type="radio"> Sim </label>
                                    <label for="nao3"><input name="nao3" id="nao3" value="n" type="radio"> Não </label></td>
                            </tr>
                            <tr>
                                <td><label for=""> Você se considera (assinale quantas quiser) de acordo com sua percepção: </label>
                               <br> 
                               
                                <input type="checkbox" name="pergunta1" value="produtivo"> Produtivo.<br>
                                <input type="checkbox" name="pergunta2" value="comunicativo">Comunicativo.<br>
                                <input type="checkbox" name="pergunta3" value="extrovertido">Extrovertido.<br>
                                <input type="checkbox" name="pergunta4" value="introvertido">Introvertido.<br>
                                <input type="checkbox" name="pergunta5" value="gosto de trabalhar em grupo">Gosto de trabalhar em grupo.<br>
                                <input type="checkbox" name="pergunta6" value="Quero crescer na empresa">Quero crescer na empresa.<br>
                                <input type="checkbox" name="pergunta7" value="Posso viajar a trabalho"> Posso viajar a trabalho.<br>
                                <input type="checkbox" name="pergunta8" value="Gosto de estudar">Gosto de estudar.<br>
                                <input type="checkbox" name="pergunta9" value="Sou um bom líder">Sou um bom líder. <br>
                                </td> </tr>
                             <tr>
                                <td colspan="5"><label for=""> Espaço para informações adicionais sobre você </label> </td>
                            </tr>
                             <tr>
                                <td colspan="5"> <textarea name="Queremos lhe conhecer melhor" placeholder="Queremos lhe conhecer melhor " required="required" cols="30" rows="5"></textarea></td>
                             </tr>
                             
                             <tr>
                                 <td><method="post" enctype="multipart/form-data">
                                <label>Anexe seu currículo aqui <input type="file" name="currículo"></label>
                                <input type="submit" name="acao" value="Anexar">
                                <tr>
                                    <td><button name="b1" value="1" type="submit"> Enviar </button></td>
                                
                                   <td class="e"><input name="b2r" value="Limpar formulário" type="reset"></td>
                            </tr>
                            </form></td>
                        </tr>
                        </tbody>
                        </table> </body> </html>
    