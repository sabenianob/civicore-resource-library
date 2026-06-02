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

### CTRL-008: Draft First 10 Resource Pages

Status: TESTING

Owner: ChatGPT / Codex

Priority: Medium

Context:

Prepare the first resource content draft structure for the CiviCore Resource and Template Library.

Scope:

- Create the /content folder structure.
- Create first 10 draft placeholder files under /content/drafts.
- Keep the work content/documentation-only.
- Do not install WordPress.
- Do not add application logic.
- Do not modify SheetBot files.

Acceptance criteria:

- /content exists.
- /content/drafts exists.
- /content/templates exists.
- /content/guides exists.
- /content/tools exists.
- First 10 draft placeholder files exist under /content/drafts.
- Each placeholder uses the standard draft structure.

Implementation notes:

- Content draft directory created.
- First 10 resource draft placeholders created.
- First 3 draft resources completed.
- Batch 2 completed.
- Right-of-way agreement draft completed.
- Water system project proposal draft completed.
- Street lighting project proposal draft completed.
- Remaining 4 draft resources still pending.
- Empty content folders preserved using .gitkeep files.
- No WordPress installation yet.
- No application logic added.
- No SheetBot files modified.

---

### CTRL-013: Remove Legacy AIOS References from Documentation

Status: TESTING

Owner: Codex

Priority: High

Context:

The user's active AIOS workflow now uses the ChatGPT + Codex operating model. The project documentation must reflect the current workflow.

Scope:

- Search the active AIOS documentation for legacy workflow references.
- Remove or revise legacy role and review language.
- Replace review language with ChatGPT-led review, User + ChatGPT reconciliation, and Codex implementation after approved task definition.
- Do not add application logic.
- Do not modify SheetBot files.

Acceptance criteria:

- No legacy workflow references remain in active AIOS documentation.
- AIOS role descriptions show ChatGPT + Codex only.
- TASKS.md reflects CTRL-001 as DONE.
- No application logic is added.
- No SheetBot files are modified.

Implementation notes:

- Searched the repository for legacy workflow references.
- Removed legacy role language from Project_Context.md.
- Updated Engineering_Rules.md to describe ChatGPT-led review, User + ChatGPT reconciliation, and Codex execution.
- Updated README.md and HANDOFF.md to reflect the current ChatGPT + Codex AIOS operating model.
- No application logic was added.

---

## BACKLOG

No backlog tasks currently listed.

---

## DONE

Completion notes for CTRL-002 through CTRL-007:

- Initial ADRs created.
- ADR-001 accepted: WordPress for v1.
- ADR-002 accepted: resources.civicoreit.com.
- Content strategy created.
- Publishing workflow created.
- Template disclaimer guide created.
- No application logic added.
- No SheetBot files modified.

### CTRL-007: Create template disclaimer guide

Status: DONE

Owner: Codex

Priority: High

Context:

Create the template disclaimer guide for the CiviCore Resource and Template Library.

Implementation notes:

- Template disclaimer guide created.
- Created /docs/Template_Disclaimer_Guide.md.
- No application logic added.
- No SheetBot files modified.

### CTRL-006: Create publishing workflow

Status: DONE

Owner: Codex

Priority: High

Context:

Create the publishing workflow document for the CiviCore Resource and Template Library.

Implementation notes:

- Publishing workflow created.
- Created /docs/Publishing_Workflow.md.
- No application logic added.
- No SheetBot files modified.

### CTRL-005: Create initial content strategy

Status: DONE

Owner: Codex

Priority: High

Context:

Create the initial content strategy document for the CiviCore Resource and Template Library.

Implementation notes:

- Content strategy created.
- Created /docs/Content_Strategy.md.
- No WordPress installation was performed.
- No application logic added.
- No SheetBot files modified.

### CTRL-004: Finalize URL strategy decision

Status: DONE

Owner: User + ChatGPT

Context:

Review ADR-002 and decide whether the public library should use resources.civicoreit.com or civicoreit.com/resources.

Implementation notes:

- ADR-002 accepted: resources.civicoreit.com.
- No application logic added.
- No SheetBot files modified.

### CTRL-003: Finalize platform architecture decision

Status: DONE

Owner: User + ChatGPT

Context:

Review ADR-001 and decide whether the initial platform should use WordPress, Laravel, a static site generator, or a hybrid approach.

Implementation notes:

- ADR-001 accepted: WordPress for v1.
- No application logic added.
- No SheetBot files modified.

### CTRL-002: Create initial project ADRs

Status: DONE

Owner: Codex

Priority: High

Context:

Create the initial Architecture Decision Record files for the CiviCore Resource and Template Library.

Implementation notes:

- Initial ADRs created.
- Created /adr/ADR-001-Platform-Architecture.md.
- Created /adr/ADR-002-URL-Strategy.md.
- Created /adr/ADR-003-Content-Review-Policy.md.
- Created /adr/ADR-004-Monetization-Path.md.
- No application logic added.
- No SheetBot files modified.

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
