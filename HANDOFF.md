# HANDOFF.md: CiviCore Resource and Template Library

## Current Handoff Status

Project initialization stage.

This is a new project under the AIOS workflow.

The project is separate from SheetBot.

---

## Project Name

CiviCore Resource and Template Library

---

## Purpose

Create a public CiviCore resource and template website for:

- LGU staff
- Barangay officials
- Water districts
- Small offices
- Local organizations

The site will provide practical templates, guides, checklists, sample documents, and simple tools.

The long-term goal is to build free organic traffic first, then gradually support AdSense, premium template packs, CiviCore service lead capture, and contextual SheetBot signup links.

---

## Important Boundary

Do not modify SheetBot.

SheetBot Production v1.1 Beta is deployed at:

```text
https://sheetbot.civicoreit.com
```

SheetBot should continue to be managed in its existing project thread and repository context.

This project should use its own repository, task board, documentation, deployment plan, and environment configuration.

---

## Current Task State

CTRL-001 is DONE.

Implementation notes:

- Initial AIOS folder structure has been created.
- Required root documentation files are present.
- README.md has been added.
- Repository initialized and pushed to GitHub.
- Empty folders preserved using .gitkeep.
- No application logic has been created.
- No SheetBot files were found or modified.
- Commit: b85177e Initialize AIOS project structure.

---

## Next Recommended Tasks

- Create ADR-001 for platform architecture.
- Create ADR-002 for URL strategy.
- Create ADR-003 for content review policy.
- Draft initial content strategy in /docs.
- Draft publishing workflow in /docs.

---

## AIOS Workflow Reminder

Use the standard loop:

```text
Define -> Review -> Reconcile -> Execute
```

Current AIOS roles:

- ChatGPT: coordinator, planner, prompt engineer, documentation generator, integration reviewer, and strategic/architecture adviser.
- Codex: implementation assistant, repository/file editor, task executor, local/server-side code assistant, and TASKS.md updater.

ChatGPT leads review and planning with the user. The user and ChatGPT reconcile approved scope. Codex implements approved task definitions and updates TASKS.md.
