<?php

/*
 * Copyright 2008 ICMBio
 * Este arquivo é parte do programa SISICMBio
 * O SISICMBio é um software livre; você pode redistribuíção e/ou modifição dentro dos termos
 * da Licença Pública Geral GNU como publicada pela Fundação do Software Livre (FSF); na versão
 * 2 da Licença.
 *
 * Este programa é distribuíção na esperança que possa ser útil, mas SEM NENHUMA GARANTIA; sem
 * uma garantia implícita de ADEQUAÇÃO a qualquer MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a
 * Licença Pública Geral GNU/GPL em português para maiores detalhes.
 * Você deve ter recebido uma cópia da Licença Pública Geral GNU, sob o título "LICENCA.txt",
 * junto com este programa, se não, acesse o Portal do Software Público Brasileiro no endereço
 * www.softwarepublico.gov.br ou escreva para a Fundação do Software Livre(FSF)
 * Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301, USA
 * */

$aColumns = array(
    'ID',
    'PAI',
    'DIAS_RESTANTES',
    'NUMERO_PROCESSO',
    'INTERESSADO',
    'ASSUNTO',
    'ORIGEM',
    'ULTIMO_TRAMITE',
    'ID'
    );

$aColumnsFTS = array(
//    'NUMERO_PROCESSO',//PEDIDO DE SER REMOVIDO PELO PROTOCOLO
    'INTERESSADO',
    'ASSUNTO',
    'ORIGEM',
    'ULTIMO_TRAMITE'
    );

$sIndexColumn = "ID";
$sTable = "VW_AREA_TRABALHO_PROCESSOS";
$sExtraQuery = "ID_UNID_AREA_TRABALHO = " . DaoUnidade::getUnidade(null, 'id');

print(Grid::getGrid($_GET, $aColumns, $sIndexColumn, $sTable, $conexao, $sExtraQuery, $aColumnsFTS));