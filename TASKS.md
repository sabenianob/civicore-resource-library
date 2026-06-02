# TASKS.md: CiviCore Resource and Template Library

This file is the single source of truth for project tasks under the AIOS workflow.

## Project

CiviCore Resource and Template Library

## Project Boundary

This is separate from SheetBot. Do not modify SheetBot files, deployment, database, or production configuration.

---

## Task Status Legend

- BACKLOG
- READY
- IN_PROGRESS
- TESTING
- DONE
- BLOCKED

---

## READY

No tasks currently ready.

---

## TESTING

### CTRL-002: Create initial project ADRs

Status: TESTING

Owner: Codex

Priority: High

Context:

Create the initial Architecture Decision Record files for the CiviCore Resource and Template Library.

Scope:

- Create ADR-001 for platform architecture.
- Create ADR-002 for URL strategy.
- Create ADR-003 for content review policy.
- Create ADR-004 for monetization path.
- Keep all initial ADRs in Proposed status.
- Do not add application logic.
- Do not modify SheetBot files.

Acceptance criteria:

- Required ADR files exist under /adr.
- ADRs use the standard project ADR format.
- ADR-001 compares WordPress, Laravel, static site generator, and hybrid approach.
- ADR-002 compares resources.civicoreit.com and civicoreit.com/resources.
- ADR-003 defines AI-assisted draft generation, human review, extra review, disclaimers, and avoidance of legal advice claims.
- ADR-004 defines staged monetization.
- CTRL-003 and CTRL-004 remain in BACKLOG unless decisions are finalized.

Implementation notes:

- Created /adr/ADR-001-Platform-Architecture.md.
- Created /adr/ADR-002-URL-Strategy.md.
- Created /adr/ADR-003-Content-Review-Policy.md.
- Created /adr/ADR-004-Monetization-Path.md.
- All ADRs are marked Proposed.
- No application logic was added.

---

### CTRL-013: Remove Legacy Gemini References from AIOS Documentation

Status: TESTING

Owner: Codex

Priority: High

Context:

Gemini is no longer included in the user's active AIOS workflow. The project documentation must reflect the current ChatGPT + Codex operating model.

Scope:

- Search the active AIOS documentation for Gemini references.
- Remove or revise legacy Gemini role and review language.
- Replace review language with ChatGPT-led review, User + ChatGPT reconciliation, and Codex implementation after approved task definition.
- Do not add application logic.
- Do not modify SheetBot files.

Acceptance criteria:

- No Gemini references remain in active AIOS documentation.
- AIOS role descriptions show ChatGPT + Codex only.
- TASKS.md reflects CTRL-001 as DONE.
- No application logic is added.
- No SheetBot files are modified.

Implementation notes:

- Searched the repository for Gemini references.
- Removed legacy Gemini role language from Project_Context.md.
- Updated Engineering_Rules.md to describe ChatGPT-led review, User + ChatGPT reconciliation, and Codex execution.
- Updated README.md and HANDOFF.md to reflect the current ChatGPT + Codex AIOS operating model.
- No application logic was added.

---

## BACKLOG

### CTRL-003: Finalize platform architecture decision

Status: BACKLOG

Owner: User + ChatGPT

Context:

Review ADR-001 and decide whether the initial platform should use WordPress, Laravel, a static site generator, or a hybrid approach.

Notes:

- Keep in BACKLOG until the platform decision is finalized.
- Codex should not implement application logic until this decision is approved.

### CTRL-004: Finalize URL strategy decision

Status: BACKLOG

Owner: User + ChatGPT

Context:

Review ADR-002 and decide whether the public library should use resources.civicoreit.com or civicoreit.com/resources.

Notes:

- Keep in BACKLOG until the URL decision is finalized.
- Codex should not configure deployment or DNS until this decision is approved.

---

## DONE

### CTRL-001: Create initial AIOS project structure

Status: DONE

Owner: Codex

Context:

Create the initial AIOS project structure for the CiviCore Resource and Template Library.

Scope:

- Create required project folders.
- Create required starter documentation files.
- Add a simple README.
- Keep this project separate from SheetBot.
- Do not add application logic yet.

Files modified:

- /docs
- /tasks
- /prompts
- /adr
- Project_Context.md
- Engineering_Rules.md
- TASKS.md
- HANDOFF.md
- README.md

Acceptance criteria:

- Required folders exist.
- Required root documentation files exist.
- README includes project name, purpose, audience, SheetBot boundary, and AIOS workflow reference.
- No SheetBot files, deployment, database, or configuration are modified.

Implementation notes:

- AIOS project structure created.
- Repository initialized and pushed to GitHub.
- Empty folders preserved using .gitkeep.
- No SheetBot files found or modified.
- Commit: b85177e Initialize AIOS project structure.

---

## BLOCKED

No blocked tasks.
