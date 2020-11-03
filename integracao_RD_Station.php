		 // Integração RD STATION
		 $post_rd = array(
			"email" => $email,
			"identificador" => "Transferencia 2020 - 2",
			"token_rdstation" => "000000000000000",
			"nome" => $nome,
			"telefone" => $telefone,
			"protocolo_transferencia" => $protocolo,
			"tipo_ingresso" => $tipo,
			"curso_interesse" => $curso_interesse,
			"turno_interesse" => $curso_interesse_turno,
			"valor" => $valor,
			"instituicao_origem" => $instituicao_origem,
			"curso_formacao" => $instituicao_origem_curso,
			"valor_origem" => $valor_origem,
			"motivo_transferencia" => $mensagem,
			"semestre" => "2020-2",
			"c_utmz" => $c_utmz,
			"traffic_source" => $traffic_source
		);

		$data_string = json_encode($post_rd);
		$ch = curl_init('https://www.rdstation.com.br/api/1.3/conversions');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Content-type: application/json',
			'Content-Length: ' . strlen($data_string))
		);
		$result = curl_exec($ch);
    // Fim Integração RD STATION
