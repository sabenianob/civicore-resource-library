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

### CTRL-012: Prepare WordPress Staging Setup Checklist

Status: TESTING

Owner: ChatGPT / Codex

Priority: High

Context:

Create the WordPress staging setup checklist before installing WordPress or changing server configuration.

Scope:

- Create /docs/WordPress_Staging_Setup_Checklist.md.
- Document confirmed project decisions.
- Include pre-server verification, DNS, database, web server, WordPress installation, SSL, initial configuration, plugin, staging validation, and rollback checklist sections.
- Do not install WordPress.
- Do not change DNS.
- Do not change server configuration.
- Do not add application logic.
- Do not modify SheetBot files.

Acceptance criteria:

- WordPress_Staging_Setup_Checklist.md exists under /docs.
- Checklist includes confirmed project decisions and SheetBot separation.
- Checklist includes Nginx and Apache notes.
- Checklist includes rollback notes.

Implementation notes:

- WordPress staging setup checklist created.
- CTRL-009 through CTRL-011 moved to DONE.
- No WordPress installation performed.
- No server configuration changed.
- No application logic added.
- No SheetBot files modified.

---

### CTRL-013: Prepare WordPress Content Import Checklist

Status: TESTING

Owner: ChatGPT / Codex

Priority: Medium

Context:

Create the WordPress content import checklist and mapping document for converting repository markdown content into WordPress draft pages and posts.

Scope:

- Create /docs/WordPress_Content_Import_Checklist.md.
- Map required pages to WordPress Pages.
- Map resource drafts to WordPress Posts and recommended categories.
- Define post import, page import, post-import validation, and publishing order checklists.
- Keep CTRL-012 in TESTING unless reviewed and accepted.
- Do not install WordPress.
- Do not change server configuration.
- Do not add application logic.
- Do not modify SheetBot files.

Acceptance criteria:

- WordPress_Content_Import_Checklist.md exists under /docs.
- Required WordPress pages are mapped.
- First 10 resource drafts are mapped to recommended WordPress categories.
- Import and validation checklists are included.
- Publishing order is documented.

Implementation notes:

- WordPress content import checklist created.
- No WordPress installation performed.
- No server configuration changed.
- No application logic added.
- No SheetBot files modified.

---

## BACKLOG

No backlog tasks currently listed.

---

## DONE

Completion notes for CTRL-009 through CTRL-011:

- WordPress staging deployment plan created.
- WordPress content publishing plan created.
- Required WordPress page drafts created.
- Homepage, About, Contact, Disclaimer, and Privacy Policy drafts prepared.
- No WordPress installation performed.
- No server configuration changed.
- No application logic added.
- No SheetBot files modified.

### CTRL-011: Prepare WordPress Required Pages Drafts

Status: DONE

Owner: ChatGPT / Codex

Priority: High

Context:

Create draft content for the required WordPress non-resource pages.

Implementation notes:

- Required WordPress page drafts created.
- Homepage, About, Contact, Disclaimer, and Privacy Policy drafts prepared.
- No WordPress installation performed.
- No server configuration changed.
- No application logic added.
- No SheetBot files modified.

### CTRL-010: Prepare WordPress Content Publishing Plan

Status: DONE

Owner: ChatGPT / Codex

Priority: High

Context:

Create the WordPress content publishing plan for converting markdown drafts into WordPress public resources.

Implementation notes:

- WordPress content publishing plan created.
- No WordPress installation performed.
- No server configuration changed.
- No application logic added.
- No SheetBot files modified.

### CTRL-009: Plan WordPress Staging Deployment

Status: DONE

Owner: ChatGPT / Codex

Priority: High

Context:

Create the WordPress staging deployment planning document before installing WordPress or changing server configuration.

Implementation notes:

- WordPress staging deployment plan created.
- No WordPress installation performed.
- No server configuration changed.
- No application logic added.
- No SheetBot files modified.

### CTRL-008: Draft First 10 Resource Pages

Status: DONE

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
- Batch 3 completed.
- Remaining 4 draft resources completed.
- First 10 resource drafts are now complete.
- Content review checklist created.
- Drafts reviewed for completeness, tone, SEO fields, disclaimers, and formatting.
- Empty content folders preserved using .gitkeep files.
- No WordPress installation yet.
- No application logic added.
- No SheetBot files modified.

---

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
