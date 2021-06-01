<?php

return array(

    "feedback_question"         => "Question à afficher à l'usager.",
    "open_new"                  => "Poser une question",
    "select_department"         => "Choisir un département",
    "select_department_desc"    => "Veuillez choisir le département en lien avec votre question.",
    "no_departments"            => "Aucun département trouvé.",
    "department_user_details"   => "Détails du département et de l'usager",
    "enter_your_details"        => "Entrez vos informations",
    "enter_ticket_details"      => "Entrez informations",
    "enter_subject_message"     => "Entrez sujet et message",
    "invalid_user"              => "Assurez-vous d'entrer des données valides avant de poursuivre.",

    "registered_users"          => "Usagers enregistrés uniquement",

    "tickets"                   => "Question(s)",
    "ticket"                    => "Question|Questions",
    "subject"                   => "Sujet",
    "no_subject"                => "Aucun sujet",
    "last_action"               => "Dernière action",
    "due_time"                  => "Dû à",
    "created_time"              => "Ajouté à",
    "submitted"                 => "Soumis",
    "ticket_reply"              => "Réponse à une question",
    "ticket_note"               => "Note sur une question",
    "ticket_type"               => "Type de question",

    "user_ticket"               => "Question d'usager",
    "user_ticket_desc"          => "Poser nouvelle question pour un nouvel usager ou un usager existant.",
    "existing_user"             => "Usager existant",
    "new_user"                  => "Nouvel usager",
    "internal"                  => "Interne",
    "internal_ticket_desc"      => "Ajouter une question pour usage interne seulement. Cette question sera associée à vous et non pas à un usager.",
    "ticket_opened"             => "Votre question a été ajoutée.",
    "enter_user_details"        => "Veuillez entrer vos détails ci-desosus, ou vous connecter à votre compte si vous en avez un.",
    "already_have_account"      => "Vous avez déjà un compte, veuillez vous connecter et ouvrir la question. Veuillez utiliser la fonction 'Mot de passe oublié' au besoin.",

    "recent_tickets"            => "Questions récentes",
    "last_message_text"         => "Dernier message",

    "set_due_time"              => "Dû pour",

    "settings"                  => "Paramètres de la question",

    "priority"                  => "Priorité|Priorités",

    "channel"                   => "Canal|Canaux",
    "account"                   => "Compte|Comptes",

    "assign_operator"           => "Assigner opérateur",
    "assigned_operator"         => "Opérateurs assignés",
    "assigned_to"               => "Assigné à",
    "assigned"                  => "Assigné",

    "department"                => "Département|Départements",
    "change_department_order"   => "Faites glisser les lignes pour modifier l'ordre que les Départements sont présentés aux clients lors de l'ouverture d'un nouveau ticket.",
    "department_applicable"     => "Départements applicables",
    "department_applicable_desc" => "Les départements dans lesquels la priorité sera disponible pour les clients de sélectionner. Valable uniquement pour le frontend, toutes les priorités seront disponibles aux opérateurs pour tous les ministères.",

    "send_now"                  => "Envoyer maintenant",

    "tag"                       => "Libellé|Libellés",

    "track_ticket"              => "Suivre question",
    "view_ticket"               => "Voir question",

    // Recent activity
    "recent_activity"           => "Activité récente",

    "ticket_number"             => "No de la question",
    "ticket_format"             => "Format du no de la question",

    // Departments
    "department_public_desc"    => "Si le département est visible pour les clients sur le Web Help Desk.",
    "department_parent_desc"    => "Si le département est un sous-département, s'il vous plaît sélectionner un parent. Les rayons auxiliaires sont destinés à l'escalade et la gestion interne, donc la définition de cette supprimera certaines des options ci-dessous.",
    "department_priority"       => "Priorités de Département",
    "department_priority_desc"  => "Les priorités qui seront disponibles pour les clients lors de l'ouverture d'un ticket dans ce département, au moins un doit être sélectionné. Par défaut, toutes les priorités seront disponibles dans le département.",
    "department_no_format"      => "En option, uniquement mettre pour remplacer le format de numéro de ticket par défaut, laissez en blanc autrement.",
    "department_operator"       => "Département du Collaborateur",
    "department_default_assign" => "Par défaut attribué à",
    "dept_default_assign_desc"  => "Utilisez cette option si vous souhaitez des tickets qui sont ouverts dans ce département pour être automatiquement affecté à un ou plusieurs opérateurs.",

    // Department emails
    "email_accounts_desc"       => "Utilisez cette option si vous souhaitez des tickets qui sont ouverts dans ce département pour être automatiquement affecté à un ou plusieurs opérateurs.",
    "department_port"           => "Les valeurs par défaut sont: 110 pour POP3, 995 pour POP3 sécurisé, 143 pour IMAP, et 993 pour IMAP sécurisé. Laissez vide pour utiliser la valeur par défaut.",
    "department_encryption"     => "Certains fournisseurs de messagerie exigent SSL ou TLS pour se connecter, si vous n'êtes pas sûr de laisser ce paramètre sur Aucun.",
    "department_delete_mail"    => "Si vous utilisez IMAP, vous pouvez choisir de ne pas supprimer les e-mails sur le serveur après qu'ils ont été importés en tant que tickets.",
    "protocol"                  => "Protocole",
    "server"                    => "Serveur de courriels",
    "port"                      => "Port",
    "encryption"                => "Cryptage",
    "delete_downloaded"         => "Effacer courriels téléchargés",
    "consume_all"               => "Consommez Tout Email",
    "email_download"            => "Email Téléchargement",
    "email_piping"              => "Email Piping",
    "email_piping_desc"         => "Mettre en place un e-mail expéditeur comme le suivant, le chemin exécutable PHP peut être différent sur votre serveur.",
    "remote_email_piping"       => "Distance Email Piping",

    // Department email options
    "email_options"             => "Options courriels",
    "email_user_on_email"       => "Envoyer courriel aux usagers quand une question est posée par courriel",
    "email_user_on_email_desc"  => "Sélectionnez si les clients doivent être informés par courriel lorsqu'un email ils envoient des résultats dans un nouveau ticket étant ouvert.",
    "email_operators"           => "Notifier opérateurs",
    "email_operators_desc"      => "Indiquez si vous souhaitez transmettre les réponses de l'opérateur à d'autres opérateurs. Vérifie par défaut les opérateurs de messagerie option dans le panneau de commande, et enverra automatiquement un e-mail pour les réponses par courriel par les opérateurs.",
    // Department email templates
    "new_ticket_opened"         => "Nouvelle question ouverte",
    "waiting_for_response"      => "En attente d'une réponse",
    "ticket_auto_closed"        => "Questions fermées automatiquement",
    "closed_by_operator"        => "Fermé par l'opérateur",

    // Feedback
    "feedback"                  => "Feedback",
    "feedback_form"             => "Formulaire de feedback|Formulaires de feedback",
    "feedback_form_desc"        => "Des formulaires de Feedback sont traitées dans l'ordre où ils apparaissent. Faites glisser les lignes à réorganiser et ajuster la priorité des formulaires de Feedback.",
    "view_feedback"             => "Afficher feedback",
    "ticket_feedback"           => "Feedback sur la question",
    "feedback_fields_error"     => "Il y avait un problème de la récupération des champs de Feedback.",
    "time_after_resolved"       => "Durée de temps après la résolution",
    "time_after_resolved_desc"  => "Le temps après lequel un ticket est marqué comme résolu que le formulaire de Feedback est envoyé au client.",
    "expires_after"             => "Expire",
    "expires_after_desc"        => "Le temps après lequel un formulaire de Feedback a expiré ne peut plus répondre. Bien que nous recommandons la mise en 7 jours, vous pouvez entrer 0 dans tous les champs pour ne pas fixer de date d'expiration.",
    "form_conditions"           => "Conditions du formulaire",
    "form_conditions_desc"      => "Définir les conditions de tickets pour lesquels des tickets nouvellement résolus sont vérifiées pour voir si elles tombent sous cette forme. Si un ticket résolu correspond à des formes multiples, il sera sélectionné sur la priorité de la forme, qui peut être modifié en allant à la liste des formulaires et réordonnancement.",
    "form_fields"               => "Champs du formulaire",
    "rating"                    => "Évaluation",
    "feedback_desc"             => "Merci de nous avoir contactés. Nous espérons avoir répondre à votre demande à votre entière satisfaction. Pourriez-vous évaluer votre expérience ci-dessous ?",
    "good_satisfied"            => "Bien, je suis satisfait-e",
    "bad_not_satisfied"         => "Mauvais, je ne suis pas satisfait-e",
    "feedback_not_found"        => "Vos commentaires ne pouvait être acceptée, s'il vous plaît ouvrir un ticket avec nous si vous souhaitez partager vos commentaires.",
    "feedback_malformed_token"  => "Vos commentaires ne pouvait être acceptée en raison d'un jeton malformé. S'il vous plaît ouvrir un ticket avec nous si vous souhaitez partager vos commentaires.",
    "feedback_expired"          => "Le ticket a été résolu pendant un certain temps, et il ne peut malheureusement plus être classé.",
    "feedback_questions"        => "Si vous pouviez épargner quelques instants, s'il vous plaît répondre aux questions suivantes pour nous aider à améliorer encore le soutien que nous offrons.",
    "feedback_for_ticket"       => "Feedback pour Ticket #:number",
    "feedback_rating_desc"      => "Le soutien reçu sur ce ticket a été classé comme <strong>:rating</strong> par le client.",

    // Custom fields
    "customfield"               => "Champ sur mesure de la question|Champ sur mesure de la question",
    "customfield_order"         => "Faites glisser les lignes à modifier l'ordre des champs personnalisés sont présentés aux clients lors de l'ouverture des tickets via le web.",

    // Canned responses
    "cannedresponse"            => "Réponses pré-enregistrée|Réponses pré-enregistrées",

    // Filters
    "filter"                    => "Filtre|Filtres",
    "filter_condition"          => "Conditions des filtres",
    "filter_condition_desc"     => "Définir les conditions de tickets pour lesquels les tickets sont répertoriés sous ce filtre.",

    // Macros
    "macro"                     => "Macro|Macros",
    "macro_condition"           => "Conditions des macros",
    "macro_action"              => "Actions des macros",
    "macro_action_desc"         => "Définir des actions qui sont exécutées quand une macro est effectuée. S'il vous plaît assurer que les mesures sont valables pour le département du ticket est ou bien ils seront ignorés.",

    "from"                      => "De",
    "to"                        => "À",
    "cc"                        => "CC",

    "allowed_files"             => "Types de fichiers autorisés pour attachement",

    // Drafts
    "also_viewing"              => "<strong>:name</strong> regarde aussi ce ticket.",
    "draft_saved"               => "Brouillon enregistré à :time",
    "save_draft"                => "Enregistrer le brouillon",
    "discard_draft"             => "Projet Supprimer",

    // Locked
    "error_ticket_locked"       => "Ce ticket a été verrouillé et ne peut pas être mis à jour à nouveau, s'il vous plaît ouvrir un nouveau ticket si vous avez besoin d'aide.",

    // Ticket Followups
    "follow_up"                 => "Suivre",
    "follow_up_status_desc"     => "Réglez le ticket pour un statut différent jusqu'à la date de suivi.",
    "exact_date_time"           => "Date et temps exacte",
    "time_from_now"             => "Temps à partir de maintenant",

    // Schedule
    "schedule"                  => "Horaire|Horaires",
    "business_hour"             => "Heures de travail",
    "business_hour_desc"        => "Heures de travail indiquent le temps que le personnel sont disponibles pour répondre aux requêtes de l'horaire. Les heures sont pris en considération pour le calcul de temps de résolution du ticket.",

    // Holidays
    "holiday"                   => "Vacances|Vacances",
    "holiday_or_on_the"         => "ou bien, au ",
    "holiday_month_year_desc"   => "Année est facultative si le jour férié est récurrent. Sélectionnez une année seulement si le jour férié se produit à cette date dans une année donnée.",

    // SLA Plans
    "sla_plan"                  => "Entente SLA|Ententes SLA",
    "specific_schedule"         => "Horaires spécifiques",
    "calendar_hours_24"         => "Heures du calendrier (24 Hours)",
    "resolution_time"           => "Temps de résolution",
    "resolution_time_desc"      => "Temps qu'un ticket doit être répondu et résolu  par priorité. Le temps sera compté que pendant les heures d'affaires basées sur l'horaire choisi (s), les valeurs décimales peuvent être utilisées.",
    "reply_within"              => "Réponse dans un délai de",
    "resolve_within"            => "Résolutions dans un délai de",
    "plan"                      => "Plan",
    "sla_condition"             => "Conditions de l'entente SLA",
    "sla_condition_desc"        => "Définir les conditions de tickets pour lesquels de nouveaux tickets sont vérifiés pour voir si elles tombent sous ce régime. Si un nouveau ticket correspond à plusieurs plans SLA, il sera sélectionné sur la priorité du plan, qui peut être modifié en allant à la liste des plans et réordonnancement.",
    "escalation_rule"           => "Règles d'escalade",
    "escalation_rule_desc"      => "Définir les actions qui sont effectuées lorsqu'un ticket en vertu de ce plan SLA est proche ou est devenu en retard. S'il vous plaît assurer que les règles sont valables pour le département du ticket est ou bien ils seront ignorés.",
    "condition"                 => "Condition",
    "condition_group"           => "Condition Group",
    "all_groups"                => "Tous les groupes doivent être vrai",
    "any_group"                 => "Tout groupe peut être vrai",
    "all_conditions"            => "TOUTES les conditions dans le groupe doit être vrai",
    "any_condition"             => "TOUTE état dans le groupe peut être vrai",
    "sla_plan_desc"             => "Plans SLA sont traitées dans leur ordre d'apparition. Faites glisser les lignes à réorganiser et ajuster la priorité des plans SLA.",

    // Reply options
    "reply_options"             => "Options de réponses",
    "send_email_to_users"       => "Envoyer courriel à/aux usager(s)",
    "send_email_to_operators"   => "Envoyer courriel à/aux opérateur(s)",
    "back_to_grid"              => "Retour à la grille des questions",
    "take"                      => "Prendre",
    "take_ownership"            => "Prendre propriété",
    "pause_duetime"             => "Pauser l'heure due",
    "add_to_canned_responses"   => "Ajouter aux réponses pré-enregistrées",
    "visible_to_all_operators"  => "Rendre visible à tous les opérateurs",
    "set_status"                => "Définir statut",
    "add_selfservice_link"      => "Ajouter lien libre-service",
    "search_selfservice"        => "Recherche d'article libre-service",
    "search_canned"             => "Recherche de réponse pré-enregistrée",

    "mark_resolved"             => "Identifier comme résolu",

    "ticket_signature"          => "Signature question",

    "default_open_status"       => "Statut d'ouverture par défaut",

    "default_resolve_status"    => "Statut non résolu par défaut",
    "default_resolve_status_desc" => "Sélectionnez l'état par défaut qui est utilisé pour les tickets qui ont été résolus.",

    "waiting_response_time"      => "En attente de réponse Email",
    "waiting_response_time_desc" => "Le temps après les clients reçoivent un e-mail sur les tickets inactifs, en demandant si ils considèrent le ticket comme résolu. Mettre à 0 pour désactiver cet e-mail. ",

    "close_inactive_tickets"    => "Fermer questions inactives",
    "close_inactive_tickets_desc" => "Le temps au bout duquel les tickets inactifs sont automatiquement fermés, mis à 0 pour ne jamais fermer automatiquement des tickets.",

    "ticket_reply_order"        => "Ordre de réponse des questions",
    "ticket_reply_order_desc"   => "Sélectionnez l'ordre dans lequel les messages de tickets sont présentés, par ordre croissant, où le dernier message est le dernier ou descendant où le dernier message est le premier.",

    "ticket_notes_position"     => "Ticket Position des Remarques",
    "ticket_notes_position_desc" => "Sélectionnez où dans le ticket ces notes sont affichées.",
    "ticket_notes_top_messages" => "En haut et dans les messages",
    "ticket_notes_top"          => "En haut seulement",
    "ticket_notes_messages"     => "Dans les messages seulement",

    "captcha_desc"              => "Lorsque le captcha devrait être affiché aux clients d'ouverture de nouveaux tickets.",
    "unregistered_only"         => "Usagers non enregistrés seulement",

    "allow_unauth_users"        => "Autoriser usagers non identifiés",
    "allow_unauth_users_desc"   => "Autoriser les clients qui ne sont pas connectés à afficher et répondre aux tickets. La désactivation de cette supprimera également la fonction de ticketterie de la piste et les clients devront être enregistrés et vous connecter avant de pouvoir accéder à des tickets.",

    "default_department"        => "Département par défaut",
    "default_department_desc"   => "Le service par défaut défini sur tous les tickets entrants via ce canal.",

    "show_related_articles"     => "Afficher articles reliés",
    "show_related_articles_desc" => "Lorsque le client tape le sujet, ils peuvent figurer des articles connexes sur la base de ce qu'ils sont entrés. Nécessite le module libre-service doit être activé et MySQL 5.6+.",

    // Email Channel Settings
    "default_priority"          => "Priorité par défaut",
    "default_priority_desc"     => "La priorité par défaut définie pour tous les tickets entrants via ce canal.",
    "verbose_email_log"         => "Tous l'historique Email",

    "last_reply"                => "Dernière réponse",
    "opened_at"                 => "Ouvert à",

    "change_department"         => "Changer département",
    "change_status"             => "Changer statut",
    "no_statuses"               => "Aucun statuts trouvé. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "no_priorities"             => "Aucune priorité trouvé. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "no_templates"              => "Aucun modèle personnalisé email trouvés. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "no_tags"                   => "Pas de tags de tickets trouvés. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "no_departments_found"      => "Aucun départements trouvé. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "no_operators_found"        => "Aucun collaborateurs trouvé. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "change_priority"           => "Changer priorité",
    "add_tag"                   => "Ajouter libellé",

    "unlock"                    => "Débloquer",
    "merge"                     => "Fusionner",
    "merged"                    => "Fusionné",
    "unmerge"                   => "Défusionner",
    "close_and_lock"            => "Fermer et bloquer",

    "mass_reply"                => "Réponse de groupe",

    "due_today"                 => "Dû aujourd'hui",
    "overdue"                   => "En retard",
    "unassigned"                => "Non assigné",

    "pause_duetime_desc"        => "S'il y a un plan SLA actif sur ce ticket, mettre en pause le temps restant dû qu'après la date de suivi. Le temps voulu ne commencera à nouveau une fois une réponse ou une note a été ajoutée au ticket (y compris du suivi).",

    "add_cc"                    => "Ajouter CC",
    "reply_above_line"          => "Veuillez répondre au-dessus de cette ligne",

    "email_settings"            => "Paramètres courriel",
    "web_settings"              => "Paramètres web",
    "split_selected_replies"    => "Séparer les réponses sélectionnées",

    "track_ticket_not_found"    => "Impossible de trouver ticket avec numéro de ticket et adresse e-mail du client indiquée.",

    "channel_deactivated"       => "Le canal de tickets est actuellement désactivée, une réponse ne peut pas être affichée.",

    "type_in_tags"              => "Entrer libellés",

    /*
     * 2.0.1
     */
    "allowed_files_desc"        => "Une liste des extensions de fichiers, séparés par le tuyau | caractère, qui sont autorisés en tant que pièces jointes. Par exemple: txt|png|jpg. Pour permettre à tous les attachements, entrée: ?.*",

    /*
     * 2.0.2
     */
    "no_operator_groups"        => "Aucun groupe de collaborateurs trouvé. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "no_user_groups"            => "Aucun groupe de clients trouvés. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "remote_email_piping_desc"  => "Télécharger le <a href='http://www.supportpal.com/manage/dl.php?type=d&id=8' target='_blank'>email distant script de tuyauterie</a> et suivre le <a href = 'http://docs.supportpal.com/display/DOCS/Remote+Email+Piping' target ='_blank'>documentation</a> sur la configuration sur votre serveur de messagerie.",

    /*
     * 2.0.3
     */
    "department_consume_all"    => "Par défaut, SupportPal a un support email alias et vérifier l'adresse de destination sur le courrier électronique entrant pour voir quel département le ticket doit être ouvert dans un ticket est pas ouverte si une adresse e-mail du service correspondant ne peut être trouvé. L'activation de ce paramètre signifie tous les e-mails sans adresse email département correspondant sont importés comme des tickets dans ce département.",
    "default_reply_options"     => "Options de réponses par défaut",
    "default_reply_options_desc" => "Sélectionnez les options de réponse par défaut lors de l'ouverture ou réponse à un ticket. Le ':reply_option' option sera cochée sur la base du ':department_option'. paramètre département",
    "associate_response_tag"    => "Réponse pré-définiee associée à un tag ...",
    "canned_response_tags_desc" => "Ajouter des tags qui peuvent aider à trouver une réponse pré-définiee lors de la réponse à un ticket.",
    "loading_tags"              => "Activer tags",
    "append_ip_address"         => "Ajouter adresse IP",
    "append_ip_address_desc"    => "Ajoutez l'adresse IP des clients à leurs messages quand ils ouvrent et répondent aux tickets à partir du frontend.",
    "unassign_operator"         => "Détacher Collaborateurs",
    "remove_tag"                => "Enlever le tag",
    "message_clipped"           => "[Message attaché]",
    "view_entire_message"       => "Voir message entier",
    "no_custom_fields"          => "Aucun champs personnalisés trouvés. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "follow_up_active"          => "Un <a class='view-followup' style='text-decoration :underline;'>suivi</a> est actuellement actif sur ce ticket et se déroulera peu après <strong>:time </strong>",
    "disable_user_email_replies" => "Désactiver les réponses du client",

    /*
     * 2.1.0
     */
    "default_ticket_filter"     => "Filtre des questions par défaut",
    "default_ticket_filter_desc" => "The ticket filter that is used by default when clicking the 'Manage Tickets' link. Can be set to 'None', the default option, which will show all unresolved tickets.",
    "recent_filters"            => "Filtres récents",
    "inactive_tickets"          => "Questions inactives",
    "default_open_status_desc"  => "Select the default status that should be automatically set when a user opens a new ticket or replies to a ticket without an operator response yet.",
    "default_reply_status"      => "Statut par défaut des réponses",
    "default_reply_status_desc" => "Select the default status that should be automatically set when a user replies to a ticket, only applies after an operator has replied to the ticket.",
    "ticket_reply_order_default" => "System default will use the value that is currently selected in the ticket general settings.",
    "select_a_parent"           => "Select a parent department...",
    "select_a_department"       => "Choisir un département...",
    "department_operator_desc"  => "You may also assign individual operators to the department. These operators will be in addition to any groups assigned above.",
    "department_group"          => "Groupes de départements",
    "department_group_desc"     => "You may assign whole operator groups to the department, recommended if your list of operators is large and/or changes frequently.",
    "ticket_other_brands"       => "Questions dans les autres marques",
    "add_for_department"        => "Ajouter pour le département...",
    "record_order"              => "Drag the rows to change the order of records.",
    "reply_all"                 => "Répondre à tous",
    "reply_without_cc"          => "Répondre (sans CC)",
    "email_accounts"            => "Comptes courriel",
    "add_another_email"         => "Ajouter une autre adresse courriel",
    "follow_up_date"            => "Date de suivu",
    "post_reply"                => "Répondre",
    "post_note"                 => "Ajouter une note",
    "ticket_details"            => "Détails de la question",
    "organisation_tickets"      => "Questions de l'organisation",
    "manage_tickets"            => "Gérer questions",
    "via_channel"               => "via :channel",
    "department_parent"         => "Département parent",
    "department_brands"         => "Marques du département",
    "email_item"                => "Courriel :item",
    "from_name"                 => "De (nom)",
    "from_address"              => "De (adresse)",

    /*
     * 2.1.1
     */
    "edited_message"            => ":user le :date",
    "prioritise_reply-to"       => "Prioriser Reply-To",
    "prioritise_reply-to_desc"  => "Toggle to prioritise the Reply-To header over the From header. If enabled, tickets opened via email will be opened on behalf of the Reply-To name and address.",
    "note_options"              => "Options des notes",
    "escalation_rules_desc"     => "The below SLA plan escalation rules are scheduled to run after the times listed. These times may change or the rules may be removed if an operator replies to this ticket.",

    /*
     * 2.1.2
     */
    "not_registered_user"       => "Not a registered user. Email channel settings set to only import emails from registered users.",
    "display_name"              => "Email Display Name",
    "display_name_desc"         => "Optional, only set to override the display name used on outgoing emails from this department, leave blank otherwise.",
    "display_name_options"      => "The following Twig variables may be used:<br >{{ brand.name }} - Brand name<br />{{ department.name }} - Department Name<br />{{ department.frontend_name }} - Shows the parent department name, if ticket belongs to a sub-department.<br />{{ operator.formatted_name }} - Operator Name<br /><em>The operator name won't always be available, so wrap it in a 'not empty' conditional i.e. {% if operator is not empty %}{{ operator.formatted_name }}{% endif %}</em>",
    "attachment_rejected"       => "Attachment Rejected",
    "enable_subaddresses"       => "Enable Sub-addresses",
    "enable_subaddresses_desc"  => "Toggle to enable using email sub-addressing for all departments. This will create a unique sub-address for each ticket that is set as the Reply-To address on all outgoing email. Your mail server must be able to handle sub-addressing, additional steps may be required if you are using email piping to ensure emails to these addresses are forwarded correctly. Enabling this will allow you to remove the ticket number from the subject of email templates.",
    "email_replies_disabled"    => "Email Replies Disabled",
    "disable_user_email_replies_desc" => "Enable to block email replies from users, and also remove the reply clipping line from outbound ticket emails. By default, the email will be silently ignored, but you can set an email to be sent to the user by changing the selected email template for the 'Email Replies Disabled' option below.",
    "bcc"                       => "BCC",
    "assigned_to_ticket"        => "Assigned to Ticket",
    "user_ticket_reply"         => "User Ticket Reply",
    "new_internal_ticket"       => "New Internal Ticket",
    "department_changed"        => "Department Changed",
    "operator_ticket_reply"     => "Operator Ticket Reply",
    "new_ticket_note"           => "New Ticket Note",
    "email_template_desc"       => "You may select an email template other than the default to be sent to the user or operators for any of the actions below. This template will become the default for this department only.",
    "create_new_user"           => "Create new user",
    "user_reply_internal_ticket" => "Not an operator. Only operators can reply to internal tickets.",
    "enter_email_address"       => "Enter email address...",
    "email_user_frontend"       => "Email Users on Tickets Opened at Frontend",
    "email_user_frontend_desc"  => "Select whether users should be notified by email when they open a ticket themselves on the frontend.",
    "department_template_disabled" => "The relevant department email template is disabled, so this email cannot be sent.",
    "verbose_email_log_desc"    => "If email collection should be logged on file, recommended to keep disabled unless instructed by support for debugging. Five days worth of logs are stored, older log files will be purged automatically by the system.",

    /*
     * 2.2.0
     */
    "user_ticket_existing_desc" => "Open new ticket on behalf of an existing user.",
    "canned_response_tag"       => "Canned Response Tag|Canned Response Tags",
    "response"                  => "Response|Responses",
    "response_desc"             => "The canned response can be written in several languages. The appropriate response will be used automatically based on the user's language preference.",
    "no_slaplans"               => "No SLA plans found. Click <a href=':route'>here</a> to create one.",
    "filter_performance"        => "Performance considerations and recommendations",
    "filter_performance_desc"   => "<li>Filters that match more tickets will be slower, in most cases try to exclude resolved tickets.</li><li>Filters using 'is not' conditions will usually be slower than using 'is' conditions.</li><li>Filters checking for NULL values (e.g. Ticket tag is None) will be slower.</li><li>Avoid multiple conditions that involve checking strings/words as they introduce more complexity.</li><li>Filters using 'begins with' or 'contains' conditions will generally be slower than using 'equals' or 'ends with' conditions.</li><li>Resolved tickets are excluded from the counts shown in the sidebar.</li>",
    "run_macro"                 => "Run Macro",
    "run_macro_desc"            => "<strong>:macro</strong><br /><em>:description</em>",

    /*
     * 2.3.0
     */
    "registered_users_desc"     => "Toggle to only show the department to logged in users and only accept emails from users actively registered in the help desk. If enabled, a bounce back email will be sent to unregistered users who email this department, to change or disable the email please see the 'Registered Users Only' template option below.",
    "form_fields_desc"          => "If you'd like to collect additional information when the user provides their feedback, you may set up custom fields to show on the form here. The field type will be locked once the form has been completed by a user.",
    "feedback_ratings"          => "Customer Satisfaction Ratings (affecting your Customer Satisfaction score)",
    "email_and_other_accounts"  => "Email and other channel accounts",
    "delete_message"            => "Delete message",
    "linked_tickets"            => "Linked Tickets",
    "add_linked_ticket"         => "Add Linked Ticket",
    "create_linked_ticket"      => "Create linked ticket",
    "copy_link"                 => "Copy link",
    "forward_message"           => "Forward this message",
    "forward_from_here"         => "Forward ticket from here",
    "forward"                   => "Forward",
    "forward_options"           => "Forward Options",
    "forwarded_to"              => "Forwarded to",
    "new_operator_reply"        => "New Operator Reply",
    "new_user_reply"            => "New User Reply",
    "add_bcc"                   => "Add BCC",
    "at_least_one_recipient"    => "Please specify at least one recipient.",
    "forwarded_message"         => "---------- Forwarded message ----------",

    /*
     * 2.3.1
     */
    "inactive_ticket_note"      => "Note: only affects tickets belonging to a status with 'Close Inactive Tickets' enabled.",
    "close_inactive_status_desc" => "Toggle to enable/disable automatic closure of inactive tickets and inactivity email reminders ('Waiting For Response' and 'Ticket Auto Closed' templates). If enabled, the time before reminders are sent can be configured via the ticket general settings.",
    "from_header_missing"       => "From: header missing from email.",
    "move_ticket"               => "Move Ticket",
    "move_ticket_step1"         => "Step 1: Choose a new brand to move ticket to",
    "move_ticket_step2"         => "Step 2: Choose a department from new brand",
    "current_record"            => "Current :record",
    "new_record"                => "New :record",
    "department_email"          => "Department Email",
    "select_a_department_email" => "Select a department email...",
    "record_public_desc"        => "Toggle to only let the :record be accessible by yourself.",
    "record_group_desc"         => "If you wish to make the :record visible to only certain operator groups. Leave blank to make visible to all operators.",
    "ticket_format_desc"        => "Can contain alphanumeric characters and special characters <code>-_.+!*,</code><br />The following variables may also be used: %S for a sequential number | %N for a random number | %L for a random letter<br />Use {number} to repeat <strong>only</strong> after %N or %L, e.g. %N{4} equates to 4 random numbers, %L{3} equates to 3 random letters<br />The following <a href='http://php.net/manual/en/function.date.php' target='_blank'>PHP Date</a> Parameters prefixed with % Y,y,m,d,j,g,G,h,H,i,s",

    /*
     * 2.4.0
     */
    "macro_enabled_desc"        => "Toggle to disable the macro and prevent it from running automatically or showing in the ticket interface.",
    "macro_order_drag"          => "Drag the rows to change the order of the macros.",
    "macro_order_processed"     => ":type macros are processed in the order they appear.",
    "macro_type"                => "Macro Type",
    "macro_type_desc"           => "There are three types of macros available. Manual macros can only be ran from the ticket view or grid, automatic macros run on unresolved tickets every hour, and hook macros run on specified ticket events. Automatic and hook macros can also be set to only run within specific schedules. Any hook macro actions won't trigger other hook macros to avoid the risk of loops.",
    "macro_run_at_most"         => "Run At Most",
    "macro_run_times"           => "times", // As in '5 times'
    "macro_run_at_most_desc"    => "Limit how many times an automatic macro can run on a single ticket, leave blank to let it run an unlimited number of times.",
    "macro_events_desc"         => "Select one or more events that the macro should run on. The conditions set below will be checked before the macro runs.",
    "macro_schedules_desc"      => "By default the macro will run 24/7, but you can select one or more help desk schedules so the macro is only active during those times.",
    "macro_condition_desc"      => "Define the conditions for which tickets this macro will be available to. By default, with no conditions, it will apply to all tickets. At least one condition must be defined for automatic macros.",
    "add_remove_headers"        => "Add/Remove Headers",
    "webhook_merge_fields"      => "Merge fields can be used in the URL and content field, <a href=\"https://docs.supportpal.com/current/Merge+Fields\">learn more</a>.",
    "webhook_ticket_required"   => "A ticket must exist for this functionality to work.",
    "not_permitted"             => "Sorry, you're not permitted to view the requested ticket(s). If you think this has been shown in error, please contact your administrator.",
    "watch"                     => "Watch",
    "unwatch"                   => "Unwatch",
    "watching"                  => "Watching",
    "internal_ticket"           => "Internal Ticket|Internal Tickets",

    /*
     * 2.4.1
     */
    "downloading"               => "Downloading...",
    "downloading_desc"          => "If the download doesn't start automatically in a few seconds, please <a href=':href'>click here</a> to access the download URL directly.",

    /*
     * 2.5.0
     */
    "belonging_to"              => "(Belonging to :name)",
    "block_user"                => "Block User",
    "merge_tickets"             => "Merge Tickets",

    /*
     * 2.5.1
     */
    "channel_account_removed"   => "The ticket channel account has been deactivated or removed, a reply cannot be posted.",

    /*
     * 2.6.0
     */
    "follow_ups"                => "Follow Ups",
    "follow_up_multiple_active" => "Multiple <a class='view-followup' style='text-decoration: underline;'>follow ups</a> are currently active on this ticket and the next scheduled will run <strong>:time</strong>.",
    "follow_up_no_actions"      => "The follow up has no actions set, please confirm if you'd like to continue.",
    "status_after_running"      => "Status After Running",
    "older_messages"            => ":count older messages",
    "holiday_single_day"        => "Single Day",
    "holiday_date_range"        => "Date Range",

    /*
     * 3.0.0
     */
    "merge_tickets_into"        => "Select ticket to merge into",
    "search_number_or_subject"  => "Search by ticket number or subject",
    "im_not_sure"               => "I'm not sure",
    "auto_reply_detected"       => "Auto-reply detected - no notification will be sent to the user(s).",
    "cc_desc"                   => "You can CC other people on to this ticket by entering email addresses here.",

    /*
     * 3.2.0
     */
    "drafting_message"          => "<strong>:name</strong> was drafting a message",

    /*
     * 3.3.0
     */
    "email_setup_manually"      => "Set Up Manually",
    "unresolved"                => "Unresolved",
    "resolved"                  => "Resolved",
    "manage_oauth_options"      => "To add or manage OAuth options, please visit the <a href=\":route\">Third-Party Integrations</a> page.",

    /*
     * 3.4.0
     */
    "feedback_saved"            => "We've saved your feedback.",
    "how_was_the_help"          => "How was the help you received?",
    "update_feedback"           => "Update Feedback",
    "verify_user"               => "Please verify the authenticity of the user.",
    "web_channel_name"          => "Web",
    "web_channel_desc"          => "Tickets opened through the frontend interface for users or operator panel for operators.",
    "email_channel_name"        => "Email",
    "email_channel_desc"        => "Tickets opened from processing incoming email.",
    "api_channel_name"          => "API",
    "api_channel_desc"          => "Tickets and replies posted through the API.",

);
