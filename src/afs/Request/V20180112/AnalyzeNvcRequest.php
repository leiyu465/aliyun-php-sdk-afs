<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace afs\Request\V20180112;

use Aliyun\Core\RpcAcsRequest;


class AnalyzeNvcRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("afs", "2018-01-12", "AnalyzeNvc");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $sourceIp;

	private  $data;

	private  $scoreJsonStr;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getSourceIp() {
		return $this->sourceIp;
	}

	public function setSourceIp($sourceIp) {
		$this->sourceIp = $sourceIp;
		$this->queryParameters["SourceIp"]=$sourceIp;
	}

	public function getData() {
		return $this->data;
	}

	public function setData($data) {
		$this->data = $data;
		$this->queryParameters["Data"]=$data;
	}

	public function getScoreJsonStr() {
		return $this->scoreJsonStr;
	}

	public function setScoreJsonStr($scoreJsonStr) {
		$this->scoreJsonStr = $scoreJsonStr;
		$this->queryParameters["ScoreJsonStr"]=$scoreJsonStr;
	}
	
}