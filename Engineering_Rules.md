
---

## Engineering_Rules.md

# Engineering Rules: CiviCore Resource and Template Library

## 1. Project Boundary

This project is separate from SheetBot.

Do not modify SheetBot files, database, deployment configuration, routes, environment variables, or production behavior while working on this project.

SheetBot Production v1.1 Beta is located at:

https://sheetbot.civicoreit.com

This project should use its own repository, task board, documentation, deployment plan, and environment configuration.

---

## 2. AIOS Workflow Rules

This project follows the AI Operating System workflow.

Required loop:

```text
Define -> Review -> Reconcile -> Execute
```
Define
Clarify the purpose, scope, constraints, and expected output.

Review
Use ChatGPT-led review for architecture, security, infrastructure, content, SEO, documentation, and strategic concerns before implementation.

Reconcile
Resolve scope, requirements, and approval between the user and ChatGPT before execution.

Execute
Codex implements only the approved task definition, updates repository files, verifies work, and records task status in TASKS.md.

## 3. Required Repository Structure
/docs
/tasks
/prompts
/adr
Project_Context.md
Engineering_Rules.md
TASKS.md
HANDOFF.md
README.md

Recommended future structure:
/app
/public
/resources
/templates
/content
/storage
/config
/database

Actual structure may depend on the final platform decision.

## 4. Documentation-First Rule
Before implementing major functionality, create or update the relevant documentation.

Examples:
 - Platform decision must have an ADR.
 - URL strategy must have an ADR.
 - Content workflow must be documented.
 - Publishing workflow must be documented.
 - Monetization plan must be documented before adding ads or paid products.
 - Template disclaimer policy must be documented before publishing legal-adjacent templates.
 
 ## 5. ADR Rules
Use ADRs for important technical or strategic decisions.
Initial ADRs to create:
/adr/ADR-001-Platform-Architecture.md
/adr/ADR-002-URL-Strategy.md
/adr/ADR-003-Content-Review-Policy.md
/adr/ADR-004-Monetization-Path.md

Each ADR should include:
``` text
# ADR-XXX: Title

## Status

Proposed | Accepted | Superseded

## Context

## Decision

## Consequences

## Alternatives Considered
```

## 6. Content Safety and Accuracy Rules
The site may contain templates that are legal-adjacent or governance-adjacent.

Therefore:

 - Do not present templates as legal advice.
 - Do not claim that a template is legally sufficient for all cases.
 - Do not claim that a template is officially approved unless it actually is.
 - Add disclaimers to right-of-way, permit-to-enter, agreement, and contract-style templates.
 - Use cautious wording for compliance-related topics.
 - Recommend office review, legal review, or authorized approval where appropriate.

Default disclaimer:
This template is provided for general reference and drafting assistance only. Users should review and adapt it according to their office policies, applicable laws, and approval procedures.

## 7. Government Tone Rule
Public-facing content should use a professional government tone.

Use:
 - Clear titles
 - Plain language
 - Formal but understandable wording
 - Practical examples
 - Philippine local government context where appropriate
 - Respectful and neutral phrasing

Avoid:
 - Hype
 - Clickbait
 - Unsupported claims
 - Overly casual language
 - Aggressive sales copy
 - Excessive AI-sounding filler
 
 ## 8. SEO Rules
 Each public resource page should include:
 - Clear page title
 - Short introduction
 - Practical use case
 - Template or guide body
 - Disclaimer where needed
 - Related resources
 - Meta title
 - Meta description
 - Slug
 - Category
 - Tags

Recommended slug style:
/lgu-request-letter-template
/barangay-project-proposal-template
/permit-to-enter-private-property-template
/water-district-website-checklist

## 9. Automation Rules
Automation may be used for:
 - Topic queue generation
 - Draft creation
 - Metadata generation
 - Slug suggestion
 - Internal linking suggestions
 - Sitemap generation
 - Content refresh suggestions

Automation must not be used for:
 - Publishing sensitive or legal-adjacent documents without review
 - Direct client outreach
 - Spam generation
 - Messaging app automation
 - False claims of official compliance
 - Unreviewed legal or procurement advice
 
 ## 10. Human Review Rule

Before publishing, each resource should be reviewed for:
 - Accuracy
 - Tone
 - Practical usefulness
 - Formatting
 - SEO metadata
 - Disclaimers
 - Risk of being mistaken as legal advice
 - CiviCore brand alignment

Legal-adjacent documents require extra review.
Examples:
 - Contracts
 - Right-of-way agreements
 - Permit-to-enter forms
 - Memorandum of agreement
 - Waivers
 - Consent documents
 
 ## 11. Security Rules
The project should follow basic production security practices.

Minimum rules:
 - No secrets committed to repository.
 - Use environment variables for API keys.
 - Keep OpenAI API keys server-side only.
 - Use HTTPS.
 - Use secure admin credentials.
 - Restrict admin publishing access.
 - Protect upload endpoints if any.
 - Validate and sanitize user inputs.
 - Rate-limit AI-assisted generation endpoints if public.
 - Log important admin actions.
 
 ## 12. Privacy Rules
If the site later includes forms, lead capture, downloads, or user accounts:
 - Collect only necessary information.
 - Clearly state what information is collected.
 - Do not expose personal data publicly.
 - Avoid storing sensitive documents unless required.
 - Use proper consent notices for contact forms.
 - Prepare a privacy policy before public lead capture.
 
 ## 13. Monetization Rules
 Monetization must be staged.

Do not add ads, payment gateways, or premium products until the site has:
 - Clear content structure
 - Published free resources
 - Basic SEO setup
 - Proper disclaimers
 - Privacy policy if needed
 - Terms or usage notes if needed

AdSense should not be added before the site has enough original and useful content.

## 14. SheetBot Linkage Rule
SheetBot may be linked later, but should not be tightly coupled at the start.

Allowed:
 - Contextual links to SheetBot signup pages
 - Productivity-related resource links
 - Office automation articles referencing SheetBot

Not allowed initially:
 - Shared codebase
 - Shared database
 - SheetBot production changes
 - Forced SheetBot signup flow
 - Direct dependency on SheetBot availability
 
 ## 15. Deployment Rules
The project should use a staging-first deployment approach.

Possible staging URL:
https://resources-staging.civicoreit.com

Possible production URL:
https://resources.civicoreit.com

Before production deployment:
 - Confirm platform architecture.
 - Confirm web server configuration.
 - Confirm SSL.
 - Confirm environment variables.
 - Confirm sitemap.
 - Confirm robots.txt.
 - Confirm basic analytics/search console setup.
 - Confirm no test content is publicly indexed.
 
 ## 16. Content Versioning Rule
 Important templates should have version information.
 Recommended format:
 Template Version: v1.0
Last Reviewed: YYYY-MM-DD
Prepared by: CiviCore IT Solutions

This is especially useful for downloadable packs and government-style forms.

## 17. Development Discipline
Codex should not make broad changes without a task.

Every change should correspond to a TASKS.md item.

Each task should include:
 - ID
 - Title
 - Status
 - Owner
 - Context
 - Scope
 - Files to modify
 - Acceptance criteria
 - Notes
 
## 18. Initial Engineering Principle
Start simple.

The first version should prioritize:
 - Useful content
 - Clean structure
 - Search visibility
 - Maintainability
 - Low operating cost
 - Clear publishing workflow

Avoid premature complexity such as:
 - Full user accounts
 - Complex CMS customization
 - Payment gateway integration
 - Public AI generator tools
 - Large admin systems
 - Deep SheetBot integration

These can be considered later after traffic and content validation.
