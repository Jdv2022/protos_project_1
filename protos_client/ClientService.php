<?php

namespace protos_project_1\protos_client;

use grpc\GetUserDetails\GetUserDetailsServiceClient;
use grpc\Register\RegisterServiceClient;
use grpc\userRegistrationFormData\UserRegistrationFormDataServiceClient;
use grpc\getUsers\GetUsersServiceClient;
use grpc\userClockIn\UserClockInServiceClient;
use grpc\getAttendance\GetAttendanceClient;
use grpc\userClockOut\UserClockOutServiceClient;
use grpc\CreateTeam\CreateTeamServiceClient;
use grpc\CreateShift\CreateShiftServiceClient;
use grpc\AssignUserToTeam\AssignUserToTeamServiceClient;
use grpc\TeamLists\TeamListsServiceClient;
use grpc\AssignUserShift\AssignUserShiftServiceClient;
use grpc\GetArchives\GetArchivesServiceClient;
use grpc\AddArchive\AddArchiveServiceClient;

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
	// UMS
	public function clockOut(): UserClockOutServiceClient {
		return $this->userManagementServiceClient(UserClockOutServiceClient::class);
	}
	// UMS
	public function getAttendanceClient(): GetAttendanceClient {
		return $this->userManagementServiceClient(GetAttendanceClient::class);
	}
	// UMS
	public function CreateTeamClient(): CreateTeamServiceClient {
		return $this->userManagementServiceClient(CreateTeamServiceClient::class);
	}
	// UMS
	public function AssignUserToTeam(): AssignUserToTeamServiceClient {
		return $this->userManagementServiceClient(AssignUserToTeamServiceClient::class);
	}
	// UMS
	public function TeamListsServiceClient(): TeamListsServiceClient {
		return $this->userManagementServiceClient(TeamListsServiceClient::class);
	}
	// UMS
	public function CreateUserShiftServiceClient(): CreateShiftServiceClient {
		return $this->userManagementServiceClient(CreateShiftServiceClient::class);
	}
	// UMS
	public function AssignUserShiftServiceClient(): AssignUserShiftServiceClient {
		return $this->userManagementServiceClient(AssignUserShiftServiceClient::class);
	}

	// UMS
	public function GetArchivesServiceClient(): GetArchivesServiceClient {
		return $this->userManagementServiceClient(GetArchivesServiceClient::class);
	}

	// UMS
	public function AddArchiveServiceClient(): AddArchiveServiceClient {
		return $this->userManagementServiceClient(AddArchiveServiceClient::class);
	}	

	protected function userManagementServiceClient(string $class): mixed {
		return new $class(
			'ums-app-1:9001',
			[
				'credentials' => \Grpc\ChannelCredentials::createInsecure(),
			]
		);
	}

}
