<?php

namespace protos_project_1\protos_client;

use grpc\GetUserDetails\GetUserDetailsServiceClient;
use grpc\Register\RegisterServiceClient;
use grpc\userRegistrationFormData\UserRegistrationFormDataServiceClient;
use grpc\getUsers\GetUsersServiceClient;
use grpc\userClockIn\UserClockInServiceClient;

class ClientService {
	// UMS
    public function getUserServiceClient(): GetUserDetailsServiceClient {
		return $this->userManagementServiceClient(GetUserDetailsServiceClient::class);
	}
	// UMS
	public function getRegisterServiceClient(): RegisterServiceClient {
		return $this->userManagementServiceClient(RegisterServiceClient::class);
	}
	// UMS
	public function getRegistrationFormDataClient(): UserRegistrationFormDataServiceClient {
		return $this->userManagementServiceClient(UserRegistrationFormDataServiceClient::class);
	}
	// UMS
	public function getUsers(): GetUsersServiceClient {
		return $this->userManagementServiceClient(GetUsersServiceClient::class);
	}
	// UMS
	public function clockIn(): UserClockInServiceClient {
		return $this->userManagementServiceClient(UserClockInServiceClient::class);
	}

	protected function userManagementServiceClient(string $class): mixed {
		return new $class(
			'127.0.0.1:9001',
			[
				'credentials' => \Grpc\ChannelCredentials::createInsecure(),
			]
		);
	}

}
