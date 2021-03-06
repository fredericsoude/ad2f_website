<?php

	$w_routes = array(
		//FRONT

		// ASSOCIATION
		['GET', '/association', 'Front\\Association#home', 'association_home'],
		['GET|POST', '/association/contact', 'Front\\Association#contact', 'association_contact'],
		['GET|POST', '/association/adhesion', 'Front\\Association#adhesion', 'association_adhesion'],

		// EVENT VIEWER
       ['GET', '/event/carnaval', 'Front\\EventViewer#showCarnaval', 'eventViewer_carnaval'],
	   ['GET', '/event/feteDesVoisins', 'Front\\EventViewer#showBlockParty', 'eventViewer_fetes'],
	   ['GET', '/event/samediMalin', 'Front\\EventViewer#showSaturdayMorning', 'eventViewer_samedi'],
	   ['GET', '/event/braderie', 'Front\\EventViewer#showGarage', 'eventViewer_braderie'],
	   ['GET|POST', '/event/braderie/inscription', 'Front\\EventViewer#subscribeGarage', 'eventViewer_braderieIncription'],

	   //ASSOCIATION
	   ['GET', '/agenda/soon', 'Front\\Agenda#showSoon', 'agenda_Soon'],
	   ['GET', '/agenda/meeting', 'Front\\Agenda#showMeeting', 'agenda_meeting'],

		//BACKOFFICE


		//Admin
		['GET|POST', '/backoffice/adminCreate', 'Backoffice\\Admin#create', 'backoffice_AdminCreate'],
		['GET|POST', '/backoffice/adminForgot', 'Backoffice\\Admin#forgot', 'backoffice_AdminForgot'],
		['GET|POST', '/backoffice/adminLogin', 'Backoffice\\Admin#login', 'backoffice_AdminLogin'],
		['GET|POST', '/backoffice/adminLogout', 'Backoffice\\Admin#logout', 'backoffice_AdminLogout'],

		//Adherent
		['GET', '/backoffice/membersList', 'Backoffice\\Members#liste', 'backoffice_Memberslist'],
		['GET|POST', '/backoffice/membersEdit', 'Backoffice\\Members#edit', 'backoffice_MembersEdit'],


		// EVent
		['GET|POST', '/backoffice/eventCreate', 'Backoffice\\Event#create', 'backoffice_EventCreate'],
		['GET', '/backoffice/eventList', 'Backoffice\\Event#liste', 'backoffice_EventList'],
		['GET|POST', '/backoffice/eventEdit', 'Backoffice\\Event#edit', 'backoffice_EventEdit'],
		['GET|POST', '/backoffice/eventDelete', 'Backoffice\\Event#delete', 'backoffice_EventDelete'],

		// BRADERIE
		['GET', '/backoffice/garageList', 'Backoffice\\Garage#liste', 'backoffice_GarageList'],
		['GET|POST', '/backoffice/garageDelete', 'Backoffice\\Garage#delete', 'backoffice_GarageDelete'],
		['GET|POST', '/backoffice/garageEdit', 'Backoffice\\Garage#edit', 'backoffice_GarageEdit'],

		//REUNIONS-MEETING
		['GET|POST', '/backoffice/meetingsCreate', 'Backoffice\\Meetings#create', 'backoffice_MeetingsCreate'],
		['GET', '/backoffice/meetingsList', 'Backoffice\\Meetings#liste', 'backoffice_MeetingsList'],
		['GET|POST', '/backoffice/meetingsEdit', 'Backoffice\\Meetings#edit', 'backoffice_MeetingsEdit'],
		['GET|POST', '/backoffice/meetingsDelete', 'Backoffice\\Meetings#delete', 'backoffice_MeetingsDelete'],




	);
