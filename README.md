# dr_agenda

### Requisitos Funcionais

 - O App deve permitir que o usuário busque um médico especialista; (Módulo Local)
 - Ao encontrar o médico que deseja, o usário poderá visualizar datas e horários dos próximos 1 ano (Módulo Local)
 - O App deve permitir que o usuário selecione a data e horário da consulta e envie uma solicitação;
 - Ao receber a solicitação, o médico deve aprovar, cancelar ou reagendar a consulta;(Módulo Local)
    - Aprovado: salvar a data em sua agenda particular (Google Agenda API) (Módulo API)
        - Noticação do evento
    - Cancelar: Cancela evento, notifica usuário;
    - reagendar: Canela evento, médico seleciona nova data e/ou usuário , notifica usuário e aguarda aprovação do mesmo.
        Sim: gera evento salva na agenda (Módulo API)
        Não: Encerra agendamento e retorna pro começo
===============================================================================================
 Requisitos Nao Funcionais

 - Segurança: ACL, criptografia;
 -






