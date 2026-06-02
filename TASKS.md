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

### CTRL-005: Create initial content strategy

Status: TESTING

Owner: Codex

Priority: High

Context:

Create the initial content strategy document for the CiviCore Resource and Template Library.

Scope:

- Create /docs/Content_Strategy.md.
- Define content purpose, audience, initial categories, first topic ideas, priority launch batch, standard page format, SEO positioning, content review rules, and future expansion paths.
- Keep the work documentation-only.
- Do not install WordPress.
- Do not add application logic.
- Do not modify SheetBot files.

Acceptance criteria:

- Content_Strategy.md exists under /docs.
- The document includes the required categories and first 30 topic ideas grouped by category.
- The document recommends the first 10 resources to draft and publish first.
- The document defines the standard content page format.
- The document includes SEO positioning, content review rules, and future content expansion.

Implementation notes:

- Created /docs/Content_Strategy.md.
- Included project content purpose and target audience.
- Added six initial content categories.
- Added 30 topic ideas grouped by category.
- Added the recommended first 10 launch resources.
- Added the standard content page format and SEO positioning.
- Added content review rules for AI-assisted drafting, human review, legal-adjacent review, and disclaimers.
- Added future expansion notes for premium packs, downloadable versions, contextual SheetBot links, and simple calculators/tools.
- No WordPress installation was performed.
- No application logic was added.
- No SheetBot files were modified.

---

### CTRL-003: Finalize platform architecture decision

Status: TESTING

Owner: User + ChatGPT

Context:

Review ADR-001 and decide whether the initial platform should use WordPress, Laravel, a static site generator, or a hybrid approach.

Implementation notes:

- ADR-001 accepted with WordPress v1 decision.
- No application logic added.
- No SheetBot files modified.

### CTRL-004: Finalize URL strategy decision

Status: TESTING

Owner: User + ChatGPT

Context:

Review ADR-002 and decide whether the public library should use resources.civicoreit.com or civicoreit.com/resources.

Implementation notes:

- ADR-002 accepted with resources.civicoreit.com decision.
- No application logic added.
- No SheetBot files modified.

---

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
- CTRL-003 and CTRL-004 are moved out of BACKLOG only after decisions are finalized.

Implementation notes:

- Created /adr/ADR-001-Platform-Architecture.md.
- Created /adr/ADR-002-URL-Strategy.md.
- Created /adr/ADR-003-Content-Review-Policy.md.
- Created /adr/ADR-004-Monetization-Path.md.
- All ADRs are marked Proposed.
- No application logic was added.
- CTRL-003 and CTRL-004 were later moved to TESTING after ADR-001 and ADR-002 were accepted.

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
