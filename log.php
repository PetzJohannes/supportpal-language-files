<?php

return array(

    // Standard messages
    "item_created"                      => "Crée :item :rel.",
    "item_updated"                      => "Mise à jour :item :rel.",
    "item_deleted"                      => "Supprimé :item :rel.",

    // Custom messages
    "ip_ban_created"                    => "Crée nouveau interdiction pour IP :rel.",
    "ip_ban_updated"                    => "Mise à jour de l'interdiction pour on IP :rel.",
    "ip_ban_deleted"                    => "Interdiction supprimée pour IP :rel.",
    "banned_ip_on_login"                => "Interdiction pour IP :rel pour 15 minutes.",

    "ip_whitelist_created"              => "IP :rel ajouté au whitelist.",
    "ip_whitelist_updated"              => "Mise à jour IP :rel dans whitelist.",
    "ip_whitelist_deleted"              => "IP :rel supprimé du whitelist.",

    "system_cleanup"                    => "Exécuter nettoyage du système pour :rel.",

    "api_failed_login"                  => "IP :rel échec d'authentification vers API.",

    "user_successful_login"             => "Connecté au système de ticket.",
    "user_failed_login"                 => "Échec d'authentification.",
    "user_successful_logout"            => "Deconnecté au système de ticket.",

    "user_registered"                   => "Compte enregistré.",
    "user_confirmed"                    => "Compte confirmé.",
    "user_password_set"                 => "Set a password for their account.",
    "user_password_reset"               => "Définissez un mot de passe pour leur compte.",

    "user_added_to_organisation"        => "Client :rel ajouté au projet :new_value.",
    "user_removed_from_organisation"    => "Client :rel enlevé du projet :old_value.",
    "user_profile_updated"              => "Mise à jour du compte client.",
    "user_left_organisation"            => "Client a quitté projet :rel.",
    "user_organisation_emptied"         => "Tous les clients enlevés du projet :rel.",
    "user_organisation_updated"         => ":rel's niveau d'accès du projet a changé de :old_value en :new_value.",
    "organisation_membership_updated"   => "Mise à jour adhésion client au projet :rel.",
    "organisation_profile_updated"      => "Mis à jouu profil du projet :rel.",
    "organisation_owner_updated"        => "Possession du projet transferré de :rel en :new_value.",

    "mass_email_queued"                 => " :new_value emails dans file d'attente en lots à envoyer.",
    "mass_email_sent"                   => " :new_value emails envoyés dans la file d'attente.",

    "email_queue_deleted"               => "Email en queue supprimé à :rel.",

    "scheduled_task_run"                => "Tâche planifiée :rel a été exécuté manuellement .",

    "selfservice_article_upvoted"       => "Positively rated article :rel.",
    "selfservice_article_downvoted"     => "Negatively rated article :rel.",
    "selfservice_comment_posted"        => "Posted a new :rel.",
    "selfservice_comment_upvoted"       => "Up-voted :rel rating from :old_value to :new_value.",
    "selfservice_comment_downvoted"     => "Down-voted :rel rating from :old_value to :new_value.",

    "ticket_opened"                     => "Nouveau ticket ouvert #:rel.",
    "ticket_opened_on_behalf"           => "Nouveau ticket ouvert #:rel de la part :new_value.",
    "ticket_opened_email"               => "Nouveau ticket crée via email importé #:rel.",

    "ticket_message_reply"              => "Nouvelle réponse posté sur ticket #:rel.",
    "ticket_message_note"               => "Nouvelle note posté sur ticket #:rel.",
    "ticket_message_deleted"            => "message supprimé sur ticket #:rel.",

    "ticket_user_updated"               => "Mise à jour client sur ticket #:rel de :old_value à :new_value.",
    "ticket_subject_updated"            => "Mise à jour sujet sur ticket #:rel.",
    "ticket_department_updated"         => "Mise à jour département sur ticket #:rel de :old_value à :new_value.",
    "ticket_status_updated"             => "Mise à jour statut sur ticket #:rel de :old_value à :new_value.",
    "ticket_priority_updated"           => "Mise à jour priorité sur ticket #:rel de :old_value à :new_value.",
    "ticket_tag_added"                  => "Tag ajouté :new_value sur ticket #:rel.",
    "ticket_tag_updated"                => "Mise à jour tags sur ticket #:rel.",
    "ticket_tag_removed"                => "Tag enlevé :new_value du ticket #:rel.",
    "ticket_slaplan_updated"            => "Mise à jour Plan SLA sur ticket #:rel de :old_value à :new_value.",
    "ticket_duetime_updated"            => "Mise à jour temps de résolution sur ticket #:rel à :new_value.",
    "ticket_duetime_paused"             => "Faire pauser Temps de résolution sur ticket #:rel jusqu'à prochaine réponse du client.",
    "ticket_customfield_updated"        => "Mise à jour champs peronnalisé sur ticket #:rel.",
    "ticket_converted_user"             => "Ticket interne #:rel converti en ticket client.",
    "ticket_converted_internal"         => "Ticket client #:rel converti en ticket interne.",

    "ticket_assigned_operator"          => ":new_value attribué sur ticket #:rel.",
    "ticket_unassigned_operator"        => ":new_value des-attribué du ticket #:rel.",
    "ticket_assigned_self"              => "Attribué soi-même le ticket #:rel.",
    "ticket_assigned_updated"           => "Mise à jour des collaborateurs attribués du ticket #:rel.",

    "ticket_locked"                     => "Ticket #:rel bloqué.",
    "ticket_unlocked"                   => "Ticket #:rel debloqué",
    "ticket_locked_reply"               => "Réponse n'a pas pu être ajouté au ticket bloqué #:rel.",

    "ticket_merged"                     => "Ticket(s) :new_value fusionné(s) en ticket #:rel.",
    "ticket_unmerged"                   => "Ticket :rel a été defusionné.",

    "ticket_user_blocked"               => "Email bloqué :new_value (par client user sur ticket #:rel).",

    "ticket_closed"                     => "Ticket #:rel a été fermé.",
    "ticket_inactive_closed"            => "Ticket non actif fermé #:rel du statut :old_value.",
    "ticket_awaiting_response"          => "Email en attente d'une réponse envoyé sur ticket #:rel.",

    "ticket_split_from"                 => "Scission des messages de l'ancien ticket #:rel en nouveau ticket #:new_value.",
    "ticket_split_to"                   => "Scission des messages de l'ancien ticket #:old_value en nouveau ticket #:rel.",

    "ticket_attachment_saved"           => "Added attachment to ticket #:rel.",
    "ticket_attachment_deleted"         => "Deleted attachment from ticket #:rel.",

    "ticket_throttled"                  => "Rejected new ticket from :rel due to throttling.",

    /*
     * 2.0.3
     */
    "selfservice_attachment_saved"      => "Added attachment ':new_value' to article ID :rel.",
    "selfservice_attachment_deleted"    => "Deleted attachment ':new_value' from to article ID :rel.",
    "ticket_unassigned_self"            => "Unassigned self from ticket #:rel.",

    /*
     * 2.1.0
     */
    "ticket_brand_disabled_reply"       => "Reply could not be added due to ticket belonging to a disabled brand #:rel.",
    "personal_signatures_updated"       => "Updated personal signatures.",
    "operator_signatures_updated"       => "Updated :rel's signatures.",
    "check_email_failed"                => "Error: Failed to download email from account :old_value: ':rel'.",
    "ticket_added_cc"                   => "Email(s) :new_value added to CC address list for ticket #:rel.",
    "ticket_removed_cc"                 => "Email(s) :old_value removed from CC address list for ticket #:rel.",
    "invalid_department_brand"          => "Failed to set department to ':new_value' on ticket #:rel, department does not belong to ticket brand.",

    /*
     * 2.1.2
     */
    "sent_email_to"                     => "Sent an email with subject ':extra_rel1' to :rel.",
    "sent_template_email_to"            => "Sent ':extra_rel1' email to :rel.",
    "sent_ticket_email_to_user"         => "Sent ':extra_rel1' email to user for ticket #:rel.",
    "sent_email_to_operators"           => "Sent ':extra_rel1' email to operators.",
    "sent_ticket_email_to_operators"    => "Sent ':extra_rel1' email to operators for ticket #:rel.",
    "sent_email_to_operator_group"      => "Sent ':extra_rel1' email to operator group ':new_value' for ticket #:rel.",
    "ticket_macro_applied"              => "The macro ':new_value' was ran on ticket #:rel.",
    "ticket_macro_automatic"            => "The macro ':new_value' automatically ran on ticket #:rel.",
    "email_template_not_found"          => "Email template ID ':new_value' not found, aborted sending email.",
    "ticket_duetime_unset"              => "Unset the due time on ticket #:rel.",
    "private_conversation_started"      => "Started a conversation with :rel.",
    "private_message_sent"              => "Sent a message to :rel.",
    "not_imported_replies_disabled"     => "An email :extra_rel1 was received for ticket #:rel, but was not imported as ticket email replies are disabled.",
    "not_imported_ticket_locked"        => "An email :extra_rel1 was received for ticket #:rel, but was not imported as the ticket is locked.",

    /*
     * 2.2.0
     */
    "ticket_user_added_to_group"        => "Ticket user added to user group :new_value.",
    "ticket_user_removed_from_group"    => "Ticket user removed from user group :old_value.",
    "email_on_behalf"                   => "Forwarded :extra_rel2 on behalf of ':extra_rel1' in ticket #:rel.",

    /*
     * 2.3.0
     */
    "registered_users_only"             => "Sent ':extra_rel1' email to :new_value, department does not accept emails from unregistered users.",
    "deleted_user"                      => "Deleted :item ':rel' with email ':email_address' (ID :user_id).",
    "linked_ticket"                     => "Linked ticket #:rel with ticket :extra_rel1.",
    "unlinked_ticket"                   => "Unlinked ticket #:rel from ticket :extra_rel1.",
    "email_queue_attachment_deleted"    => "Deleted attachment ':old_value' from queued email ':rel'.",
    "forward_ticket_email"              => "Forwarded ticket #:rel to third-party, view ':extra_rel1' email.",

    /*
     * 2.3.1
     */
    "selfservice_comment_updated"       => "Updated :rel by :extra_rel1.",
    "selfservice_comment_status"        => "Changed status of :rel by :extra_rel1 from :old_value to :new_value.",
    "selfservice_comment_deleted"       => "Deleted comment by :extra_rel1.",
    "ticket_message_posted"             => "Posted a new :extra_rel1 to ticket #:rel.",
    "ticket_message_edited"             => "Edited a :extra_rel1 in ticket #:rel.",
    "email_send_failed"                 => "Failed to send email.",
    "ticket_brand_updated"              => "Updated the brand on ticket #:rel from :old_value to :new_value.",
    "export_scheduled"                  => "An export of user :rel has been scheduled.",
    "export_generated"                  => "Export :new_value of user :rel has been generated and stored on the system.",
    "export_deleted"                    => "Export :old_value of user :rel has been deleted from the system.",
    "deleted_inactive_records"          => "Automatically deleted :old_value inactive :rel.",
    "deleted_old_records"               => "Automatically deleted old :rel records.",
    "sent_email_to_user_group"          => "Queued email to user group ':new_value' for ticket #:rel.",

    /*
     * 2.4.0
     */
    "ticket_watching"                   => "Watching ticket #:rel.",
    "ticket_unwatching"                 => "No longer watching ticket #:rel.",
    "ticket_watch_operator"             => "Set :new_value to watch ticket #:rel.",
    "ticket_unwatch_operator"           => "Unset :new_value from watching ticket #:rel.",

    /*
     * 2.5.0
     */
    "marked_user_as_confirmed"          => "Confirmed ownership of email address on behalf of user :rel.",
    "ticket_department_email_updated"   => "Updated the department email on ticket #:rel from :old_value to :new_value.",
    "ticket_watching_updated"           => "Updated watching operators on ticket #:rel.",
    "ticket_deleted"                    => "Permanently deleted ticket ':old_value' (#:rel).",
    "ticket_trashed"                    => "Moved ticket #:rel to trash.",
    "ticket_restored"                   => "Restored ticket #:rel from trash.",
    "emptied_ticket_trash"              => "Automatically cleaned the ticket trash of ':old_value' records.",

    /*
     * 2.6.0
     */
    "ticket_followup_set"               => "A new follow up has been set up on ticket #:rel.",
    "ticket_followup_updated"           => "A follow up on ticket #:rel has been updated.",
    "ticket_followup_deleted"           => "A follow up on ticket #:rel has been deleted.",

    /*
     * 3.0.0
     */
    "selfservice_article_neutral"       => "Neutrally rated article :rel.",

);
