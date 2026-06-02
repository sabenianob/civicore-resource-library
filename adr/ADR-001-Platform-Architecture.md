# ADR-001: Platform Architecture

## Status

Proposed

## Context

The CiviCore Resource and Template Library is intended to start as a public content and template library for LGU staff, barangay officials, water districts, small offices, and local organizations.

The first version should prioritize useful content, clean publishing workflows, SEO readiness, low operating cost, and maintainability. No application logic is required yet.

The platform should support future possibilities such as simple tools, premium template packs, service lead capture, and contextual SheetBot links, but the project should avoid overengineering before content and traffic are validated.

This project follows the current AIOS workflow with ChatGPT and Codex only. ChatGPT leads planning, review, documentation, and strategic/architecture advice. Codex implements approved documentation and repository tasks.

## Decision

The initial recommended direction is to start content-first and avoid overengineering.

WordPress is acceptable for fast publishing, SEO plugins, editorial workflow, AdSense readiness, and low-friction content management.

Laravel may be considered later if custom tools, premium template packs, account features, deeper automation, or CiviCore-specific integrations become central to the project.

No final platform decision is accepted yet. This ADR records the initial proposed direction for review.

## Consequences

Starting content-first allows the project to publish useful resources quickly and validate demand before investing in custom application features.

Using WordPress initially may reduce development time and make publishing easier, but it may require later migration or integration work if the project grows into a custom tool and premium product platform.

Deferring Laravel reduces initial complexity, but custom calculators, template generators, payment flows, and automation workflows may require a more application-oriented stack later.

The project should preserve content portability where practical so future migration remains possible.

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
