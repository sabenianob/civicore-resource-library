# Project Context: CiviCore Resource and Template Library

## 1. Project Name

CiviCore Resource and Template Library

## 2. Project Type

Public resource and template website for government-adjacent offices, local organizations, and small public-service institutions.

This project is separate from SheetBot.

SheetBot Production v1.1 Beta remains deployed at:

https://sheetbot.civicoreit.com

SheetBot should continue to be managed in its existing project thread and repository context.

---

## 3. Project Purpose

The purpose of the CiviCore Resource and Template Library is to create a public, searchable, semi-automated resource website containing useful templates, guides, checklists, sample documents, and simple tools for:

- LGU staff
- barangay officials
- water districts
- small offices
- local organizations
- public-service oriented institutions

The project should support CiviCore IT Solutions’ long-term positioning as a practical digitalization, documentation, and systems partner for local institutions.

---

## 4. Proposed Public URLs

Preferred options:

- https://resources.civicoreit.com
- https://civicoreit.com/resources

Initial recommendation:

Use `resources.civicoreit.com` if the project will grow into a dedicated public resource platform.

Use `civicoreit.com/resources` if the library will initially remain part of the main CiviCore website.

Final URL decision should be recorded in an ADR before deployment.

---

## 5. Existing Subscriptions and Assets to Use

The project should maximize existing resources and avoid unnecessary new subscriptions.

Available assets:

- DigitalOcean hosting
- civicoreit.com domain
- Google Workspace
- OpenAI API
- Existing CiviCore branding and service positioning
- Existing knowledge from LGU, water district, planning, documentation, and digitalization workflows

---

## 6. Core Concept

The site will function as a public CiviCore resource library containing:

- Free document templates
- Practical guides
- Government-style sample letters
- Project proposal templates
- Permit-to-enter and right-of-way templates
- Water district resources
- Office digitalization guides
- Basic calculators and simple tools
- Future downloadable premium packs

The initial strategy is free traffic first, monetization later.

---

## 7. Initial Content Categories

Initial content categories may include:

### LGU Letters

Examples:

- Request letters
- Endorsement letters
- Transmittal letters
- Invitation letters
- Certification templates
- Memorandum templates

### Project Proposal Templates

Examples:

- Barangay project proposal
- LGU project concept note
- Water system proposal
- Street lighting proposal
- Farm-to-market road proposal
- ICT/digitalization proposal

### Right-of-Way and Permit-to-Enter Templates

Examples:

- Permit to enter private property
- Right-of-way agreement
- Temporary access consent
- Pipe laying access permission
- Streetlight installation access consent

### Water District Resources

Examples:

- Website modernization checklist
- Customer service forms
- Public advisory templates
- Service request templates
- Billing and collection process guides
- Digital portal planning guides

### Office Digitalization Guides

Examples:

- How to organize office files
- Google Workspace setup guide
- Shared Drive structure guide
- Simple records management workflow
- Website content checklist
- Basic cybersecurity checklist

### Simple Calculators and Tools

Examples:

- Project cost estimate calculator
- Document checklist generator
- Basic billing calculator
- Water consumption calculator
- Office digital readiness checklist
- Template recommendation tool

---

## 8. Monetization Path

The project should follow a staged monetization path.

### Phase 1: Free Traffic

Build useful public content that can rank in search engines and attract organic users.

Primary goals:

- Publish useful resources
- Build topical authority
- Support CiviCore brand visibility
- Avoid heavy manual outreach

### Phase 2: AdSense

Once the site has sufficient useful content and traffic, apply for Google AdSense or similar display monetization.

### Phase 3: Premium Template Packs

Offer paid downloadable packs such as:

- LGU document pack
- Barangay project proposal pack
- Water district document pack
- Office digitalization starter pack
- Right-of-way and permit-to-enter pack

### Phase 4: CiviCore Service Lead Capture

Add soft lead capture for:

- Website modernization
- Digital portal development
- Document template customization
- Office digitalization consulting
- Water district system planning

### Phase 5: SheetBot Signup Links

Add contextual SheetBot signup links where appropriate, especially on office productivity, spreadsheet automation, billing, reporting, and document workflow topics.

---

## 9. Automation Vision

The site should support an automated or semi-automated content workflow.

Proposed workflow:

1. Maintain a topic queue.
2. Generate AI-assisted draft content.
3. Review drafts manually before publication.
4. Prepare metadata, slug, category, and tags.
5. Schedule or publish content.
6. Generate/update sitemap.
7. Monitor search performance.
8. Improve or expand high-performing content.

The automation should assist but not fully bypass human review, especially for government-style templates, legal-adjacent documents, and public-facing guidance.

---

## 10. Important Boundaries

This project should avoid:

- Direct outreach automation
- Messaging app automation
- Spam-like lead generation
- Heavy manual client interaction
- Legal advice positioning
- Claims that templates are official, mandatory, or legally sufficient in all cases
- Overpromising compliance

Templates should include appropriate disclaimers where necessary.

Recommended disclaimer pattern:

“This template is provided for general reference and drafting assistance only. Users should review and adapt it according to their office policies, applicable laws, and approval procedures.”

---

## 11. Audience

Primary audience:

- Philippine LGU personnel
- Barangay officials and staff
- Water district staff
- Administrative personnel
- Planning and development office staff
- Small public-service organizations

Secondary audience:

- NGOs
- Cooperatives
- Small offices
- Community organizations
- Local project implementers

---

## 12. Tone and Content Style

Content should use:

- Professional government tone
- Plain language
- Practical structure
- Filipino local government context where appropriate
- Copy-paste ready templates
- Clear disclaimers for legal-adjacent documents
- Search-friendly headings
- Step-by-step guidance

Avoid:

- Overly technical language for general users
- Legal certainty claims
- Aggressive sales language
- Excessive AI-generated filler
- Unverified regulatory claims

---

## 13. Suggested Technical Direction

The final stack is still subject to architecture review.

Possible options:

### Option A: WordPress

Good for fast publishing, SEO plugins, content management, and AdSense readiness.

### Option B: Laravel

Good for long-term custom tools, template generation, account features, premium packs, and integration with CiviCore systems.

### Option C: Static Site Generator

Good for fast, low-maintenance content publishing, but less ideal for future dynamic tools and premium features.

Initial recommendation:

Start with a simple content-first architecture. Avoid overengineering. If custom tools and premium packs become important, Laravel may be preferred later.

A formal stack decision should be documented in an ADR.

---

## 14. SEO and Discoverability Goals

The project should be designed for organic discovery.

Initial SEO principles:

- One useful page per template or guide
- Clear titles
- Practical headings
- Downloadable or copyable sections
- Internal linking between related templates
- Sitemap generation
- Search Console setup
- Simple schema markup where useful
- Fast loading
- Mobile-friendly layout

---

## 15. AIOS Operating Standard

This project will follow the user’s AI Operating System workflow.

Roles:

### ChatGPT

Main coordinator, prompt engineer, planning assistant, documentation generator, integration reviewer.

### Gemini

Architecture reviewer, infrastructure reviewer, security reviewer, scalability reviewer.

### Codex

Implementation assistant with repository access, file changes, task execution, and local development support.

---

## 16. Required Project Files

The project should maintain the standard AIOS structure:
```text
/docs
/tasks
/prompts
/adr
Project_Context.md
Engineering_Rules.md
TASKS.md
HANDOFF.md
README.md

Additional files may be added later:
/docs/Content_Strategy.md
/docs/Publishing_Workflow.md
/docs/SEO_Guidelines.md
/docs/Template_Disclaimer_Guide.md
/docs/Monetization_Roadmap.md
/adr/ADR-001-Platform-Architecture.md
/adr/ADR-002-URL-Strategy.md
/adr/ADR-003-Content-Review-Policy.md
/prompts/content-draft-prompt.md
/prompts/template-generation-prompt.md
```

## 17. Initial Success Criteria
The project may be considered initially successful when:
 - The project repository is created and standardized.
 - AIOS folder structure exists.
 - Initial documentation files are created.
 - URL strategy is decided.
 - Platform architecture is selected.
 - At least 10 initial resource pages are drafted.
 - At least 5 templates are reviewed and ready for publication.
 - Sitemap and basic SEO setup are planned.
 - The site can be deployed to a staging environment.
 - No SheetBot production logic or repository is affected.
 
 ## 18. Strategic Positioning
The CiviCore Resource and Template Library is not just a content site.

It is a long-term public trust and traffic asset for CiviCore IT Solutions.

It should help demonstrate that CiviCore understands:

 - LGU documentation needs
 - barangay project workflows
 - water district operations
 - small office digitalization
 - practical public-sector modernization
 - template-based productivity improvement

The site should eventually support CiviCore’s broader ecosystem, including premium templates, service inquiries, and SheetBot adoption.
