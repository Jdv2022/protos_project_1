<?php

namespace Protos_project_1\proto_client;

use Users\UserServiceClient;

class ClientService {

	public function userServiceClient() {
		return new UserServiceClient(
			'127.0.0.1:9001', 
			[
				'credentials' => \Grpc\ChannelCredentials::createInsecure(),
			]
		);
	}

}