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
