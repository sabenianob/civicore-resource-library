# ADR-001: Platform Architecture

## Status

Accepted

## Context

The CiviCore Resource and Template Library is intended to start as a public content and template library for LGU staff, barangay officials, water districts, small offices, and local organizations.

The first version should prioritize useful content, clean publishing workflows, SEO readiness, low operating cost, and maintainability. No application logic is required yet.

The platform should support future possibilities such as simple tools, premium template packs, service lead capture, and contextual SheetBot links, but the project should avoid overengineering before content and traffic are validated.

This project follows the current AIOS workflow with ChatGPT and Codex only. ChatGPT leads planning, review, documentation, and strategic/architecture advice. Codex implements approved documentation and repository tasks.

## Decision

Use WordPress for v1 of the CiviCore Resource and Template Library.

Rationale:

- The project is content-first.
- WordPress supports fast publishing, categories, tags, SEO plugins, sitemap generation, drafts, scheduled posts, and AdSense readiness.
- It reduces development time and avoids premature overengineering.
- Laravel may be considered later if the project grows into custom tools, premium template packs, account-based downloads, or AI-assisted generation workflows.

## Consequences

Using WordPress for v1 should support a faster launch and easier content management.

The initial build should require lower custom development effort than a custom Laravel application.

Future custom tools may require WordPress plugins, separate Laravel apps, or a later migration or hybrid architecture.

Security and plugin discipline will be important. WordPress core, themes, and plugins must be maintained carefully, and unnecessary plugins should be avoided.

The project should preserve content portability where practical so future migration or hybrid integration remains possible.

## Alternatives Considered

### WordPress

Good for fast publishing, SEO, editorial management, sitemap generation, AdSense preparation, and non-technical content maintenance.

Potential drawbacks include plugin maintenance, security hardening, performance tuning, and future constraints for custom tools or premium product workflows.

### Laravel

Good for custom tools, premium packs, user accounts, admin workflows, payment integration, and deeper automation.

Potential drawbacks include slower initial publishing, higher development effort, and more operational complexity before the content strategy is proven.

### Static Site Generator

Good for fast pages, low hosting cost, strong security posture, and simple content deployment.

Potential drawbacks include less friendly editorial workflow, more complex non-technical publishing, and limitations for dynamic tools, payments, or admin features.

### Hybrid Approach

Good for combining a content-first publishing system with custom tools or services later.

Potential drawbacks include integration complexity, duplicated routing or hosting concerns, and the need for clear boundaries between content and application features.
