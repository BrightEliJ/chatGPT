<?php
	class ActivitieDataCollector{

		private $client_id;
		private $client_secret;
		private $server_name_activities;
		private $server_path_activities;
		private $server_resource_activities;
		private $server_include_non_scheduled;
		private $server_fields_activities;

		public function __construct($non_scheduled=false) {
			$this->client_id = 'operationsfield@tim';
			$this->client_secret = 'f629379aeba79898463826f7a26766b7e60f7dd65c66d32e6e0a9441c9dd';
			$this->server_name_activities = 'https://tim.fs.ocs.oraclecloud.com/';
			$this->server_path_activities = 'rest/ofscCore/v1/activities';
			$this->server_resource_activities = 'Planta+Interna';
			$this->server_include_non_scheduled = $non_scheduled;
			$this->server_fields_activities = [
				/*'apptNumber'=>'apptNumber',*/
				'A_TIME_OF_BOOKING'=>'A_TIME_OF_BOOKING',
				'activityId'=>'activityId',
				'activityType'=>'activityType',
				'apptNumber'=>'apptNumber',
				'city'=>'city',
				'date'=>'date',
				'endTime'=>'endTime',
				'resourceId'=>'resourceId',
				'resourceInternalId'=>'resourceInternalId',
				'startTime'=>'startTime',
				'stateProvince'=>'stateProvince',
				'status'=>'status',
				'timeOfBooking'=>'timeOfBooking',
				'XA_EXECUTOR_USER'=>'XA_EXECUTOR_USER',
				'XA_ORIGIN_BUCKET'=>'XA_ORIGIN_BUCKET',
				'XA_PI_ALARM_TYPE'=>'XA_PI_ALARM_TYPE',
				'XA_PI_CM'=>'XA_PI_CM',
				'XA_PI_CONTRACT'=>'XA_PI_CONTRACT',
				'XA_PI_CREATE_DATE'=>'XA_PI_CREATE_DATE',
				'XA_PI_END_ID'=>'XA_PI_END_ID',
				'XA_PI_EVENT'=>'XA_PI_EVENT',
				'XA_PI_FAIL_TYPE'=>'XA_PI_FAIL_TYPE',
				'XA_PI_NE_TYPE'=>'XA_PI_NE_TYPE',
				'XA_PI_NETWORK'=>'XA_PI_NETWORK',
				'XA_PI_NETWORK_ELEMENT'=>'XA_PI_NETWORK_ELEMENT',
				'XA_PI_NOTDONE_REASON'=>'XA_PI_NOTDONE_REASON',
				'XA_PI_OP'=>'XA_PI_OP',
				'XA_PI_OPENING_NOTE'=>'XA_PI_OPENING_NOTE',
				'XA_PI_PRIORITY'=>'XA_PI_PRIORITY',
				'XA_PI_RESPONSABLE'=>'XA_PI_RESPONSABLE',
				'XA_PI_START_ALARM_DATETIME'=>'XA_PI_START_ALARM_DATETIME',
				'XA_PI_SUB_AREA'=>'XA_PI_SUB_AREA',
				'XA_PI_SUSPEND_REASON'=>'XA_PI_SUSPEND_REASON',
				'XA_PI_TRAM_REASON'=>'XA_PI_TRAM_REASON',
				'XA_PI_TRAM_SUS'=>'XA_PI_TRAM_SUS',
				'XA_PI_CRITERION'=>'XA_PI_CRITERION', // Campo para verificar ordens repetidas
				'XA_PI_GMG_START'=>'XA_PI_GMG_START', // Campo específico para GMG
				'XA_PI_GMG_END'=>'XA_PI_GMG_END', // Campo específico para GMG
				'XA_PI_GMG_STATUS'=>'XA_PI_GMG_STATUS', // Campo específico para GMG
				'XA_PI_GMG_OWNER'=>'XA_PI_GMG_OWNER', // Campo específico para GMG
				'XA_PI_GMG_DESC'=>'XA_PI_GMG_DESC', // Campo específico para GMG
				'XA_DISP_PRI'=>'XA_DISP_PRI', // Novo campo de prioridade
				'XA_DISP_PRI_FAIXA'=>'XA_DISP_PRI_FAIXA', // Novo campo de faixa prioridade
				'XA_WORKZONE_KEY'=>'XA_WORKZONE_KEY', // Campo com Workzone para ser usado como CM
				'workZone'=>'workZone', // Campo com Workzone
				'A_AUTO_ROUTED_TO_DATE'=>'A_AUTO_ROUTED_TO_DATE', // Campo com a última data de alteração pelo Router
				'XA_FIRST_ROUTING_TIME'=>'XA_FIRST_ROUTING_TIME', // Campo com a primeira data de alteração pelo Router
				'XA_PI_SS_EQP_FUNCTION' => 'XA_PI_SS_EQP_FUNCTION', // Campo contendo a função do equipamento
				'XA_PI_SS_EQP_SEG_NET' => 'XA_PI_SS_EQP_SEG_NET', // Campo contendo o segmento do equipamento
				'XA_PI_SS_GSBI_CLASS' => 'XA_PI_SS_GSBI_CLASS', // Campo contendo a numeração do GSBI
				'XA_PI_NTT_USER_RULE' => 'XA_PI_NTT_USER_RULE', // Campo para classificação do filtro de Grupo
				'XA_PI_INDUSTRIAL_BUILDINGS' => 'XA_PI_INDUSTRIAL_BUILDINGS', // Campo para classificação do filtro de Grupo
			];
		}

		public function get_client_id() {
			return $this->client_id;
		}

		public function set_client_id() {
			return 'Is not posible to edit "client_id"';
		}

		public function get_client_secret() {
			return $this->client_secret;
		}

		public function set_client_secret() {
			return 'Is not posible to edit "client_secret"';
		}

		public function get_server_name_activities(){
			return $this->server_name_activities;
		}

		public function set_server_name_activities() {
			return 'Is not posible to edit "server_name_activities"';
		}

		public function get_server_path_activities() {
			return $this->server_path_activities;
		}

		public function set_server_path_activities() {
			return 'Is not posible to edit "server_path_activities"';
		}

		public function get_server_path_resources() {
			return $this->server_resource_activities;
		}

		public function set_server_path_resources() {
			return 'Is not posible to edit "server_path_resources"';
		}

		public function get_server_resource_activities() {
			return $this->server_resource_activities;
		}

		public function set_server_resource_activities() {
			return 'Is not posible to edit "server_resource_activities"';
		}

		public function get_server_include_non_scheduled() {
			return $this->server_include_non_scheduled;
		}

		public function set_server_include_non_scheduled($value) {
			if(is_bool($value) == true){
				$this->server_include_non_scheduled = $value;
			}else{
				return 'The value should be bool';
			}
		}

		public function get_server_fields_activities() {
			return $this->server_fields_activities;
		}

		public function set_server_fields_activities() {
			return 'Is not posible to edit "server_fields_activities"';
		}

		public function create_path_to_activities($date_from, $date_to){
			$server_name_activities = $this->get_server_name_activities();
			$server_path_activities = $this->get_server_path_activities();
			$server_resource_activities = $this->get_server_resource_activities();
			$server_include_non_scheduled = $this->get_server_include_non_scheduled();
			$server_fields_activities = $this->get_server_fields_activities();

			$includeNonScheduled = null;
			if($server_include_non_scheduled == 1){
				$includeNonScheduled = 'true';
			}else if($server_include_non_scheduled == 0){
				$includeNonScheduled = 'false';
			}

			$fields = '';
			foreach($server_fields_activities as $key=>$value){
				if($fields != ''){
					$fields = $fields .','. $value;
				}else{
					$fields = ''.$value;
				}
			}

			$api_request_activities = ''
				.''. $server_name_activities
				.''. $server_path_activities
				.'?resources='. $server_resource_activities
				.'&includeNonScheduled='. $includeNonScheduled
				.'&dateFrom='. $date_from
				.'&dateTo='. $date_to
				/*.'&date=='. $date_from*/
				.'&fields='. $fields;

			return $api_request_activities;
		}

		public function get_data_from_api($url){
			$headers = array(
				'Content-Type: application/json',
				'Authorization: Basic '. base64_encode("$this->client_id:$this->client_secret"),
			);

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
			curl_setopt($ch, CURLOPT_TIMEOUT, 900);
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);

			$result = curl_exec($ch);
			$data_from_api = json_decode(curl_exec($ch));
			$info = curl_getinfo($ch);

			if(curl_errno($ch)){
				throw new Exception(curl_error($ch));
			}

			if(!$result) {
				return false;
			}

			curl_close ($ch);
			return $data_from_api;
		}

		public function get_all_data_from_api($url){
			$all_activities = [];
			$activities = $this->get_data_from_api($url);
			$array = json_decode(json_encode($activities->items),true);
			$all_activities = array_merge($all_activities, $array);

			$has_more = 0;
			if(isset($activities->hasMore)){
				$has_more = $activities->hasMore;
			}

			while($has_more == 1){
				$next_page_url = '';
				if(gettype($activities->links[1]->rel) != null && $activities->links[1]->rel == 'next'){
					$next_page_url = $activities->links[1]->href;
				}else if(gettype($activities->links[2]->rel) != null && $activities->links[2]->rel == 'next'){
					$next_page_url = $activities->links[2]->href;
				}

				$activities = $this->get_data_from_api($next_page_url);
				if($activities != false){
					$array = json_decode(json_encode($activities->items),true);
					$all_activities = array_merge($all_activities, $array);
				}

				if(isset($activities->hasMore)){
					$has_more = $activities->hasMore;
				}else{
					$has_more = 0;
				}
			}

			return $all_activities;
		}

		public function discover_activitie_data($activities){
			include_once '../../class/Pdo.class.php';
			include_once '../../class/Utils.class.php';
			$dbo_4field = new mypdo();
			$utils = new utils();

			$contract_company = [
				'TRJ2_FMO' => 'Teleperformance',
				'TNO_FMMT' => 'Tel',
				'TNO_FMO' => 'Tel',
				'TCO_FMMT' => 'Tel',
				'TCO_FMO' => 'Tel',
				'TMG_FMMT' => 'Teleperformance',
				'TMG_FMO' => 'Teleperformance',
				'TSP2_FMO' => 'Alpitel',
				'TSP_FMMT' => 'Tel',
				'TSP1_FMO' => 'Tel',
				'TNE_FMMT' => 'Teleperformance',
				'TNE_FMO' => 'Teleperformance',
				'TNE1_FMMT' => 'Teleperformance',
				'TNE1_FMO' => 'Teleperformance',
				'TNE2_FMMT' => 'Teleperformance',
				'TNE2_FMO' => 'Teleperformance',
				'TRJ1_FMO' => 'Teleperformance',
				'TRJ_FMMT' => 'Teleperformance',
				'TSL_FMMT' => 'Ondacom',
				'TSL_FMO' => 'Ondacom',
				'TNE_PREDIO_INDUSTRIAL' => 'Green4T',
				'TRJ_PREDIO_INDUSTRIAL' => 'Green4T',
				'TSP_PREDIO_INDUSTRIAL' => 'Green4T',
				'TSL_PREDIO_INDUSTRIAL' => 'Green4T',
				'TNO_PREDIO_INDUSTRIAL' => 'Green4T',
				'TCO_PREDIO_INDUSTRIAL' => 'Green4T',
				'TMG_PREDIO_INDUSTRIAL' => 'Green4T',
			];

			$uf_regional = [
				'AC' =>	'TCO',
				'AL' =>	'TNE1',
				'AM' =>	'TNO',
				'AP' =>	'TNO',
				'BA' =>	'TNE1',
				'CE' =>	'TNE2',
				'DF' =>	'TCO',
				'ES' =>	'TRJ',
				'GO' =>	'TCO',
				'MA' =>	'TNO',
				'MG' =>	'TMG',
				'MS' =>	'TCO',
				'MT' =>	'TCO',
				'PA' =>	'TNO',
				'PB' =>	'TNE2',
				'PE' =>	'TNE2',
				'PI' =>	'TNE1',
				'PR' =>	'TSL',
				'RJ' =>	'TRJ',
				'RN' =>	'TNE2',
				'RO' =>	'TCO',
				'RR' =>	'TNO',
				'RS' =>	'TSL',
				'SC' =>	'TSL',
				'SE' =>	'TNE1',
				'SP' =>	'TSP',
				'TO' =>	'TCO',
			];

			$uf_region = [
				'AC' =>	'Norte',
				'AL' =>	'Nordeste',
				'AM' =>	'Norte',
				'AP' =>	'Norte',
				'BA' =>	'Nordeste',
				'CE' =>	'Nordeste',
				'DF' =>	'Centro-oeste',
				'ES' =>	'Sudeste',
				'GO' =>	'Centro-oeste',
				'MA' =>	'Nordeste',
				'MG' =>	'Sudeste',
				'MS' =>	'Centro-oeste',
				'MT' =>	'Centro-oeste',
				'PA' =>	'Norte',
				'PB' =>	'Nordeste',
				'PE' =>	'Nordeste',
				'PI' =>	'Nordeste',
				'PR' =>	'Sul',
				'RJ' =>	'Sudeste',
				'RN' =>	'Nordeste',
				'RO' =>	'Norte',
				'RR' =>	'Norte',
				'RS' =>	'Sul',
				'SC' =>	'Sul',
				'SE' =>	'Nordeste',
				'SP' =>	'Sudeste',
				'TO' =>	'Norte',
			];

			$final_activities = [];
			foreach($activities as $activitie){
				$activitie_validate = [];

				// Data de criação no SmartService
				if(isset($activitie['XA_PI_CREATE_DATE'])){
					$converted_date = $utils->convert_datetime_br_to_datetime_en($activitie['XA_PI_CREATE_DATE']);
					$activitie_validate['XA_PI_CREATE_DATE'] = $converted_date;
				// Abertura do ticket no Netcool
				}else if(isset($activitie['XA_PI_START_ALARM_DATETIME'])){
					$activitie_validate['XA_PI_CREATE_DATE'] = $activitie['XA_PI_START_ALARM_DATETIME'];
				// Data e hora da primeira abertura do ticket
				}else if(isset($activitie['A_TIME_OF_BOOKING'])){
					$activitie_validate['XA_PI_CREATE_DATE'] = $activitie['A_TIME_OF_BOOKING'];
				// Data e hora da abertura ou reabetura
				}else if(isset($activitie['timeOfBooking'])){
					$activitie_validate['XA_PI_CREATE_DATE'] = $activitie['timeOfBooking'];
				}else{
					$activitie_validate['XA_PI_CREATE_DATE'] = '-';
				}

				// Data de posição na agenda do TOA, teoricamente é menor que a data de criação no TOA
				if(isset($activitie['date'])){
					$activitie_validate['date'] = $activitie['date'];
				}else{
					$activitie_validate['date'] = '3000-01-01';
				}

				// Data e hora da primeira abertura do ticket
				if(isset($activitie['A_TIME_OF_BOOKING'])){
					$activitie_validate['A_TIME_OF_BOOKING'] = $activitie['A_TIME_OF_BOOKING'];
				}else{
					// Data e hora da abertura ou reabetura
					if(isset($activitie['timeOfBooking'])){
						$activitie_validate['A_TIME_OF_BOOKING'] = $activitie['timeOfBooking'];
					}else{
						$activitie_validate['A_TIME_OF_BOOKING'] = '-';
					}
				}

				// Id do ticket
				if(isset($activitie['activityId'])){
					$activitie_validate['activityId'] = $activitie['activityId'];
				}else{
					$activitie_validate['activityId'] = '-';
				}

				// TSK do ticket
				if(isset($activitie['apptNumber']) && $activitie['apptNumber'] != "\\"){
					$activitie_validate['apptNumber'] = $activitie['apptNumber'];
					$activitie_validate['apptNumber'] = str_replace('"', "'", $activitie_validate['apptNumber']);
				}else{
					$activitie_validate['apptNumber'] = '-';
				}

				// Ticket gerado no Smart Service
				if(isset($activitie['XA_PI_EVENT'])){
					$activitie_validate['XA_PI_EVENT'] = $activitie['XA_PI_EVENT'];
					$activitie_validate['XA_PI_EVENT'] = str_replace('"', "'", $activitie_validate['XA_PI_EVENT']);
				}else{
					$activitie_validate['XA_PI_EVENT'] = '-';
				}

				// Tipo de ticket
				if(isset($activitie['activityType'])){
					$activitie_validate['activityType'] = $activitie['activityType'];
				}else{
					$activitie_validate['activityType'] = '-';
				}

				// Status do ticket
				if(isset($activitie['status'])){
					$activitie_validate['status'] = $activitie['status'];
				}else{
					$activitie_validate['status'] = '-';
				}

				// resourceInternalId para ser procurado na tabela de resources
				if(isset($activitie['resourceInternalId'])){
					$activitie_validate['resourceInternalId'] = $activitie['resourceInternalId'];
				}else{
					$activitie_validate['resourceInternalId'] = '-';
				}

				// ResourceId do ticket
				if(isset($activitie['resourceId'])){
					$activitie_validate['resourceId'] = $activitie['resourceId'];
				}else{
					$activitie_validate['resourceId'] = '-';
				}

				// CM: Subdivisão da regional que contem uma "base operacional"
				if(isset($activitie['XA_PI_CM'])){
					$XA_PI_CM_replaced = str_replace('_', '-', $activitie['XA_PI_CM']);
					$activitie_validate['XA_PI_CM'] = $XA_PI_CM_replaced;
				}else{
					$activitie_validate['XA_PI_CM'] = '-';
				}

				// workZone: Subdivisão da regional que contem uma "base operacional"
				if(isset($activitie['workZone'])){
					$workZone_replaced = str_replace('_', '-', $activitie['workZone']);
					$activitie_validate['workZone'] = $workZone_replaced;
				}else{
					// Caso não venha o "workZone" devemos usar o "XA_PI_CM"
					if($activitie_validate['XA_PI_CM'] != '-'){
						$activitie_validate['workZone'] = $activitie_validate['XA_PI_CM'];
					}else{
						$activitie_validate['workZone'] = '-';
					}
				}

				// Verificando se o "workZone" começa com "PI-" e substituindo por ""
				if (substr($activitie_validate['workZone'], 0, 3) === 'PI-') {
					$activitie_validate['workZone'] = substr($activitie_validate['workZone'], 3);
				}

				// XA_WORKZONE_KEY
				if(isset($activitie['XA_WORKZONE_KEY'])){
					$activitie_validate['XA_WORKZONE_KEY'] = $activitie['XA_WORKZONE_KEY'];
				}else{
					$activitie_validate['XA_WORKZONE_KEY'] = '-';
				}

				// A_AUTO_ROUTED_TO_DATE
				if(isset($activitie['A_AUTO_ROUTED_TO_DATE'])){
					$activitie_validate['A_AUTO_ROUTED_TO_DATE'] = $activitie['A_AUTO_ROUTED_TO_DATE'];
				}else{
					$activitie_validate['A_AUTO_ROUTED_TO_DATE'] = '-';
				}

				// XA_FIRST_ROUTING_TIME
				if(isset($activitie['XA_FIRST_ROUTING_TIME'])){
					$activitie_validate['XA_FIRST_ROUTING_TIME'] = $activitie['XA_FIRST_ROUTING_TIME'];
				}else{
					$activitie_validate['XA_FIRST_ROUTING_TIME'] = '-';
				}

				// Bucket de origem
				if(
					isset($activitie['XA_ORIGIN_BUCKET']) ||
					isset($activitie['XA_PI_CONTRACT'])
				){
					$activitie_contract = '';
					if(isset($activitie['XA_ORIGIN_BUCKET'])){
						$activitie_contract = $activitie['XA_ORIGIN_BUCKET'];
					}else if(isset($activitie['XA_PI_CONTRACT'])){
						$activitie_contract = $activitie['XA_PI_CONTRACT'];
					}

					if(!strpos($activitie_contract, 'PREDIO')){
						if($activitie_contract == 'Alpitel-Fibra'){
							$activitie_contract = 'TSP2_FMO';
						}

						// Descobrindo regional e contrato
						$array_bucket = explode('_', $activitie_contract);
						$activitie_validate['XA_ORIGIN_BUCKET'] = $activitie_contract;
						if(isset($array_bucket[0]) && isset($array_bucket[1])){
							$activitie_validate['regional'] = $array_bucket[0];
							$activitie_validate['contract'] = $array_bucket[1];
						}else{
							$activitie_validate['regional'] = '-';
							$activitie_validate['contract'] = '-';
						}

						// Descobrindo empresa
						if(isset($contract_company[$activitie_contract])){
							$activitie_validate['company'] = $contract_company[$activitie_contract];
						}else{
							$activitie_validate['company'] = '-';
						}
					}else{
						// Descobrindo regional e contrato para prédios industriais
						$array_bucket = explode('_', $activitie_contract);

						$activitie_validate['XA_ORIGIN_BUCKET'] = $activitie_contract;
						if(
							isset($array_bucket[0]) &&
							isset($array_bucket[1]) &&
							isset($array_bucket[2])
						){
							$activitie_validate['regional'] = $array_bucket[0];
							$activitie_validate['contract'] = $array_bucket[1] . '_' . $array_bucket[2];
						}else{
							$activitie_validate['regional'] = '-';
							$activitie_validate['contract'] = '-';
						}

						// Descobrindo empresa
						if(isset($contract_company[$activitie_contract])){
							$activitie_validate['company'] = $contract_company[$activitie_contract];
						}else{
							$activitie_validate['company'] = '-';
						}
					}
				}else{
					$activitie_validate['XA_ORIGIN_BUCKET'] = '-';
					$activitie_validate['regional'] = '-';
					$activitie_validate['contract'] = '-';
					$activitie_validate['company'] = '-';
				}

				// Regra para verificar se o 'XA_ORIGIN_BUCKET' é válido na lista de contratos
				if(!isset($contract_company[$activitie_validate['XA_ORIGIN_BUCKET']])){
					if($activitie_validate['workZone'] != '-'){
						$workZone_array = explode('-', $activitie_validate['workZone']);
						$workZone_regional = $workZone_array[0];

						// Variáveis para armazenar a classificação final de "regional"
						$final_regional = '-';
						if($workZone_regional == 'TLE'){
							$final_regional = 'TMG';
						}else{
							$final_regional = $workZone_regional;
						}

						// Variáveis para armazenar a classificação final de "contract"
						$final_contract = '-';
						if($activitie_validate['XA_FIRST_ROUTING_TIME'] != '-'){
							$final_contract = 'FMMT';
						}else{
							// Considerar FMMT enquanto não encontramos uma classificação para FMO
							$final_contract = 'FMMT';
						}

						// Variáveis para armazenar a classificação final de "XA_ORIGIN_BUCKET" e "company"
						$final_origin_bucket = '-';
						$final_company = '-';
						if(
							$final_regional != '-' &&
							$final_contract != '-'
						){
							$final_origin_bucket = $final_regional . '_'. $final_contract;

							if(isset($contract_company[$final_origin_bucket])){
								$final_company = $contract_company[$final_origin_bucket];

								$activitie_validate['XA_ORIGIN_BUCKET'] = $final_origin_bucket;
								$activitie_validate['regional'] = $final_regional;
								$activitie_validate['contract'] = $final_contract;
								$activitie_validate['company'] = $final_company;
							}
						}
					}
				}

				// Estado
				if(
					isset($activitie['XA_PI_END_ID']) ||
					isset($activitie['XA_ORIGIN_BUCKET']) ||
					isset($activitie['stateProvince'])
				){
					$uf_xa_pi = '';
					if(isset($activitie['XA_PI_END_ID'])){
						$uf_xa_pi = substr($activitie['XA_PI_END_ID'], 0, 2);
						$uf_xa_pi = strtoupper($uf_xa_pi);
					}

					$uf_xa_origin = '';
					if(isset($activitie['XA_ORIGIN_BUCKET'])){
						$uf_xa_origin = substr($activitie['XA_ORIGIN_BUCKET'], 1, 3);
						$uf_xa_origin = strtoupper($uf_xa_origin);
					}

					$uf_state = '';
					if(isset($activitie['stateProvince'])){
						$uf_state = $activitie['stateProvince'];
						$uf_state = strtoupper($uf_state);
					}

					if(isset($uf_regional[$uf_xa_pi])){
						$activitie_validate['stateProvince'] = $uf_xa_pi;
					}else if(isset($uf_regional[$uf_state])){
						$activitie_validate['stateProvince'] = $uf_state;
					}else if(isset($uf_regional[$uf_xa_origin])){
						$activitie_validate['stateProvince'] = $uf_xa_origin;
					}else{
						$activitie_validate['stateProvince'] = '-';
					}

					// Regra provisória para transformar TNE em TNE1 ou TNE2 através do estado ou END_ID
					if($activitie_validate['XA_ORIGIN_BUCKET'] == 'TNE_FMMT'){
						$stater_from_tne1 = ['AL','BA','PI','SE'];
						$stater_from_tne2 = ['CE','PB','PE','RN'];

						if(in_array($activitie_validate['stateProvince'], $stater_from_tne1)){
							$activitie_validate['XA_ORIGIN_BUCKET'] = 'TNE1_FMMT';
							$activitie_validate['regional'] = 'TNE1';
						}else if(in_array($activitie_validate['stateProvince'], $stater_from_tne2)){
							$activitie_validate['XA_ORIGIN_BUCKET'] = 'TNE2_FMMT';
							$activitie_validate['regional'] = 'TNE2';
						}
					}
				}else{
					$activitie_validate['stateProvince'] = '-';
				}

				// Cidade
				if(isset($activitie['city'])){
					$activitie_validate['city'] = $activitie['city'];
				}else{
					$activitie_validate['city'] = '-';
				}

				// Pessoa que controlou a demanda no TOA
				if(isset($activitie['XA_EXECUTOR_USER'])){
					$activitie_validate['XA_EXECUTOR_USER'] = $activitie['XA_EXECUTOR_USER'];
				}else{
					$activitie_validate['XA_EXECUTOR_USER'] = '-';
				}

				// Data e hora da abertura ou reabertura
				if(isset($activitie['startTime'])){
					$activitie_validate['startTime'] = $activitie['startTime'];
				}else{
					$activitie_validate['startTime'] = '-';
				}

				// Data e hora do encerramento
				if(isset($activitie['endTime'])){
					$activitie_validate['endTime'] = $activitie['endTime'];
				}else{
					$activitie_validate['endTime'] = '-';
				}

				// Tipo de alarme criado automaticamente nos sites
				/* Com '**' no final, temos mais de um tipo de alarme no ticket/evento */
				if(isset($activitie['XA_PI_ALARM_TYPE'])){
					$activitie_validate['XA_PI_ALARM_TYPE'] = str_replace('"', "'", $activitie['XA_PI_ALARM_TYPE']);
				}else{
					$activitie_validate['XA_PI_ALARM_TYPE'] = '-';
				}

				// Tipo de falha caminha com XA_PI_ALARM_TYPE
				if(isset($activitie['XA_PI_FAIL_TYPE'])){
					$activitie_validate['XA_PI_FAIL_TYPE'] = $activitie['XA_PI_FAIL_TYPE'];
				}else{
					$activitie_validate['XA_PI_FAIL_TYPE'] = '-';
				}

				// Site do ticket
				if(isset($activitie['XA_PI_END_ID'])){
					$activitie_validate['XA_PI_END_ID'] = $activitie['XA_PI_END_ID'];
					$activitie_validate['XA_PI_END_ID'] = str_replace('"', "'", $activitie_validate['XA_PI_END_ID']);
				}else{
					$activitie_validate['XA_PI_END_ID'] = '-';
				}

				// Equipamento que está dentro do site
				/* Verificar se existem mais de um ticket para dois equipamento */
				if(isset($activitie['XA_PI_NETWORK_ELEMENT'])){
					$activitie_validate['XA_PI_NETWORK_ELEMENT'] = $activitie['XA_PI_NETWORK_ELEMENT'];
					$activitie_validate['XA_PI_NETWORK_ELEMENT'] = str_replace('"', "'", $activitie_validate['XA_PI_NETWORK_ELEMENT']);
				}else{
					$activitie_validate['XA_PI_NETWORK_ELEMENT'] = '-';
				}

				// Tipo de equipamento no site
				if(isset($activitie['XA_PI_NE_TYPE'])){
					$activitie_validate['XA_PI_NE_TYPE'] = $activitie['XA_PI_NE_TYPE'];
					$activitie_validate['XA_PI_NE_TYPE'] = str_replace('"', "'", $activitie_validate['XA_PI_NE_TYPE']);
				}else{
					$activitie_validate['XA_PI_NE_TYPE'] = '-';
				}

				// Função do equipamento/tecnologia na rede
				if(isset($activitie['XA_PI_NETWORK'])){
					$activitie_validate['XA_PI_NETWORK'] = $activitie['XA_PI_NETWORK'];
				}else{
					$activitie_validate['XA_PI_NETWORK'] = '-';
				}

				// Razão da não conclusão
				if(isset($activitie['XA_PI_NOTDONE_REASON'])){
					$activitie_validate['XA_PI_NOTDONE_REASON'] = $activitie['XA_PI_NOTDONE_REASON'];
				}else{
					$activitie_validate['XA_PI_NOTDONE_REASON'] = '-';
				}

				// Confirmar?
				if(isset($activitie['XA_PI_OP'])){
					$activitie_validate['XA_PI_OP'] = $activitie['XA_PI_OP'];
				}else{
					$activitie_validate['XA_PI_OP'] = '-';
				}

				// Descrição da abertura
				if(isset($activitie['XA_PI_OPENING_NOTE'])){
					$activitie_validate['XA_PI_OPENING_NOTE'] = str_replace('"', "'", $activitie['XA_PI_OPENING_NOTE']);
				}else{
					$activitie_validate['XA_PI_OPENING_NOTE'] = '-';
				}

				// Prioridade
				if(isset($activitie['XA_PI_PRIORITY'])){
					$activitie_validate['XA_PI_PRIORITY'] = $activitie['XA_PI_PRIORITY'];
				}else{
					$activitie_validate['XA_PI_PRIORITY'] = '-';
				}

				// Responsável pela ocorrência do ticket
				if(isset($activitie['XA_PI_RESPONSABLE'])){
					$activitie_validate['XA_PI_RESPONSABLE'] = $activitie['XA_PI_RESPONSABLE'];
				}else{
					$activitie_validate['XA_PI_RESPONSABLE'] = '-';
				}

				// Subarea
				if(isset($activitie['XA_PI_SUB_AREA'])){
					$activitie_validate['XA_PI_SUB_AREA'] = $activitie['XA_PI_SUB_AREA'];
				}else{
					$activitie_validate['XA_PI_SUB_AREA'] = '-';
				}

				// Razão da suspensão
				if(isset($activitie['XA_PI_SUSPEND_REASON'])){
					$activitie_validate['XA_PI_SUSPEND_REASON'] = $activitie['XA_PI_SUSPEND_REASON'];
				}else{
					$activitie_validate['XA_PI_SUSPEND_REASON'] = '-';
				}

				// Razão da tramitação
				if(isset($activitie['XA_PI_TRAM_REASON'])){
					$activitie_validate['XA_PI_TRAM_REASON'] = str_replace('"', "'", $activitie['XA_PI_TRAM_REASON']);
				}else{
					$activitie_validate['XA_PI_TRAM_REASON'] = '-';
				}

				// Definição da tramitação - geralmente Tramitação ou Suspensão
				if(isset($activitie['XA_PI_TRAM_SUS'])){
					$activitie_validate['XA_PI_TRAM_SUS'] = $activitie['XA_PI_TRAM_SUS'];
				}else{
					$activitie_validate['XA_PI_TRAM_SUS'] = '-';
				}

				// Campo para verificar ordens repetidas
				if(isset($activitie['XA_PI_CRITERION'])){
					$activitie_validate['XA_PI_CRITERION'] = $activitie['XA_PI_CRITERION'];
				}else{
					$activitie_validate['XA_PI_CRITERION'] = '-';
				}

				// Campos específicos para GMG
				// Data da instalação do GMG
				if(isset($activitie['XA_PI_GMG_START'])){
					$converted_date = $utils->convert_datetime_br_to_datetime_en($activitie['XA_PI_GMG_START']);
					$activitie_validate['XA_PI_GMG_START'] = $converted_date;
				}else{
					$activitie_validate['XA_PI_GMG_START'] = null;
				}

				// Data da desinstalação do GMG
				if(isset($activitie['XA_PI_GMG_END'])){
					$converted_date = $utils->convert_datetime_br_to_datetime_en($activitie['XA_PI_GMG_END']);
					$activitie_validate['XA_PI_GMG_END'] = $converted_date;
				}else{
					$activitie_validate['XA_PI_GMG_END'] = null;
				}

				// Status de instalação do GMG
				if(isset($activitie['XA_PI_GMG_STATUS'])){
					$activitie_validate['XA_PI_GMG_STATUS'] = $activitie['XA_PI_GMG_STATUS'];
				}else{
					$activitie_validate['XA_PI_GMG_STATUS'] = '-';
				}

				// Owner do GMG
				if(isset($activitie['XA_PI_GMG_OWNER'])){
					$activitie_validate['XA_PI_GMG_OWNER'] = $activitie['XA_PI_GMG_OWNER'];
				}else{
					$activitie_validate['XA_PI_GMG_OWNER'] = '-';
				}

				// Descrição de instalação do GMG
				if(isset($activitie['XA_PI_GMG_DESC'])){
					$activitie_validate['XA_PI_GMG_DESC'] = str_replace('"', "'", $activitie['XA_PI_GMG_DESC']);
				}else{
					$activitie_validate['XA_PI_GMG_DESC'] = '-';
				}

				// Novo campo de prioridade que vai de P1 até P5
				if(isset($activitie['XA_DISP_PRI'])){
					$activitie_validate['XA_DISP_PRI'] = $activitie['XA_DISP_PRI'];
				}else{
					$activitie_validate['XA_DISP_PRI'] = '-';
				}

				if(isset($activitie['XA_DISP_PRI_FAIXA'])){
					$activitie_validate['XA_DISP_PRI_FAIXA'] = $activitie['XA_DISP_PRI_FAIXA'];
				}else{
					$activitie_validate['XA_DISP_PRI_FAIXA'] = 'P5';
				}

				if(isset($activitie['XA_PI_SS_EQP_FUNCTION'])){
					$activitie_validate['XA_PI_SS_EQP_FUNCTION'] = $activitie['XA_PI_SS_EQP_FUNCTION'];
				}else{
					$activitie_validate['XA_PI_SS_EQP_FUNCTION'] = '-';
				}

				if(isset($activitie['XA_PI_SS_EQP_SEG_NET'])){
					$activitie_validate['XA_PI_SS_EQP_SEG_NET'] = $activitie['XA_PI_SS_EQP_SEG_NET'];
				}else{
					$activitie_validate['XA_PI_SS_EQP_SEG_NET'] = '-';
				}

				if(isset($activitie['XA_PI_SS_GSBI_CLASS'])){
					$XA_PI_SS_GSBI_CLASS = intval($activitie['XA_PI_SS_GSBI_CLASS']);

					$final_XA_PI_SS_GSBI_CLASS = '';
					if($XA_PI_SS_GSBI_CLASS == 1){
						$final_XA_PI_SS_GSBI_CLASS = 'Gold';
					}else if($XA_PI_SS_GSBI_CLASS == 2){
						$final_XA_PI_SS_GSBI_CLASS = 'Silver';
					}else if($XA_PI_SS_GSBI_CLASS == 3){
						$final_XA_PI_SS_GSBI_CLASS = 'Bronze';
					}else if($XA_PI_SS_GSBI_CLASS == 4){
						$final_XA_PI_SS_GSBI_CLASS = 'Iron';
					}else{
						$XA_PI_SS_GSBI_CLASS = 4;
						$final_XA_PI_SS_GSBI_CLASS = 'Iron';
					}

					$activitie_validate['XA_PI_SS_GSBI_CLASS'] = $XA_PI_SS_GSBI_CLASS;
					$activitie_validate['XA_PI_SS_GSBI_CLASS_NAME'] = $final_XA_PI_SS_GSBI_CLASS;
				}else{
					$activitie_validate['XA_PI_SS_GSBI_CLASS'] = 4;
					$activitie_validate['XA_PI_SS_GSBI_CLASS_NAME'] = 'Iron';
				}

				if(isset($activitie['XA_PI_NTT_USER_RULE'])){
					$activitie_validate['XA_PI_NTT_USER_RULE'] = $activitie['XA_PI_NTT_USER_RULE'];
				}else{
					$activitie_validate['XA_PI_NTT_USER_RULE'] = '-';
				}

				if(isset($activitie['XA_PI_INDUSTRIAL_BUILDINGS'])){
					$activitie_validate['XA_PI_INDUSTRIAL_BUILDINGS'] = $activitie['XA_PI_INDUSTRIAL_BUILDINGS'];
				}else{
					$activitie_validate['XA_PI_INDUSTRIAL_BUILDINGS'] = '-';
				}

				// Regra para classificação do 'activity_group' para filtro de 'Grupo'
				if(
					$activitie_validate['XA_PI_FAIL_TYPE'] != '-' ||
					$activitie_validate['XA_PI_NTT_USER_RULE'] != '-' ||
					$activitie_validate['XA_PI_INDUSTRIAL_BUILDINGS'] != '-'
				){
					if($activitie_validate['XA_PI_NTT_USER_RULE'] == 'ISOC MONITORACAO TRANSPORTE LIVE'){
						$activitie_validate['activity_group'] = 'FIXA';
					}else if(
						in_array(
							$activitie_validate['XA_PI_NTT_USER_RULE'],
							[
								'ISOC MONITORACAO TRANSPORTE DADOS',
								'ISOC MONITORACAO TRANSPORTE TX',
								'BCC OFFLINE',
								'ISOC SERVICOS FIXO DADOS E VOZ',
								'ISOC SERVICOS FIXO TRANSMISSAO',
								'ISOC SERVICOS FIXO MASSIVAS',
								'ISOC SERVICOS FIXO GPRO',
								'ISOC SERVICOS FIXO GSOL',
								'BCC ONLINE',
							]
						)
					){
						$activitie_validate['activity_group'] = 'TX/CORP';
					}else if(
						strstr($activitie_validate['XA_PI_INDUSTRIAL_BUILDINGS'], 'CLASS') !== false ||
						strstr($activitie_validate['XA_PI_INDUSTRIAL_BUILDINGS'], 'PRÉDI') !== false ||
						strstr($activitie_validate['XA_PI_INDUSTRIAL_BUILDINGS'], 'PREDI') !== false
					){
						$activitie_validate['activity_group'] = 'PR_IND';
					}else if(
						strstr($activitie_validate['XA_PI_FAIL_TYPE'], 'INFRAESTRUTURA')
					){
						$activitie_validate['activity_group'] = 'INFRA';
					}else{
						$activitie_validate['activity_group'] = 'MOVEL';
					}
				}else{
					$activitie_validate['activity_group'] = 'MOVEL';
				}

				$final_activities[] = $activitie_validate;
			}
			return $final_activities;
		}
	}
?>
