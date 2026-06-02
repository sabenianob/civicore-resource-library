# WordPress Content Publishing Plan

## 1. Purpose

Define how the prepared markdown drafts will be converted into WordPress public resources for the CiviCore Resource and Template Library.

This document is planning-only. It does not install WordPress, change server configuration, import content, or publish resources.

## 2. Content Type Decision

Use WordPress Posts for resource articles, templates, checklists, and guides.

Posts are recommended for resource content because they support:

- Categories
- Tags
- Archive pages
- Feeds
- SEO plugins
- Scalable content publishing

Use WordPress Pages for fixed site pages such as:

- Homepage
- About
- Contact
- Disclaimer
- Privacy Policy
- Terms or Usage Notes, if needed later

This structure keeps reusable resource content organized as posts while reserving pages for permanent site information and policy content.

## 3. Permalink Structure

Recommended permalink structure:

```text
/%postname%/
```

Examples:

- /lgu-request-letter-template/
- /barangay-project-proposal-template/
- /permit-to-enter-private-property-template/

Slug rules:

- Use lowercase words.
- Use hyphens between words.
- Keep slugs short but descriptive.
- Avoid dates in slugs unless the resource is time-specific.
- Avoid changing slugs after publication unless redirects are planned.

## 4. Initial Categories

Initial WordPress categories:

- LGU Letters
- Project Proposal Templates
- Right-of-Way and Permit-to-Enter
- Water District Resources
- Office Digitalization Guides
- Calculators and Tools

Category rules:

- Assign one primary category per resource where possible.
- Use categories for broad resource groups.
- Avoid creating categories for one-off topics unless they are expected to grow.
- Keep category names consistent with the content strategy.

## 5. Tagging Rules

Use practical tags that help group related resources without creating clutter.

Suggested tags:

- LGU
- Barangay
- Water District
- Project Proposal
- Permit to Enter
- Right of Way
- Office Digitalization
- Google Workspace
- Cost Estimate
- Template

Tagging rules:

- Use a small number of useful tags per post.
- Avoid excessive tags.
- Avoid near-duplicate tags.
- Prefer clear terms that users and editors understand.
- Review tags periodically to prevent tag sprawl.

## 6. Resource Post Format

Each resource post should include:

- Title
- Short introduction
- When to use this resource
- Template or guide body
- Notes for customization
- Disclaimer
- Related resources

Recommended post structure:

```text
# Resource Title

Short introduction.

## When to Use This Resource

## Template or Guide Body

## Notes for Customization

## Disclaimer

## Related Resources
```

For WordPress, the metadata fields from the markdown drafts should be applied through the editor, SEO plugin, or publishing workflow rather than displayed awkwardly in the public body unless intentionally shown.

## 7. Required Non-Resource Pages Before Launch

The following fixed pages should be planned before launch. Full page content will be drafted later.

### Homepage

Purpose:

Introduce the CiviCore Resource and Template Library and guide users to useful templates, guides, and categories.

Required sections:

- Hero section
- Search or browse resources
- Featured templates
- Resource categories
- Recently added resources
- CiviCore service note
- Future contextual link area, not active yet

### About CiviCore Resources

Purpose:

Explain what the resource library is, who it is for, and how the resources should be used.

Required sections:

- Project purpose
- Intended audience
- Types of resources available
- Review and disclaimer note
- Relationship to CiviCore IT Solutions

### Contact

Purpose:

Provide a way for users to contact CiviCore for resource questions, service inquiries, or future template customization requests.

Required sections:

- Contact details
- Inquiry purpose guidance
- Expected response note
- Privacy note if a contact form is used

### Disclaimer

Purpose:

Clarify that resources are provided for general reference, drafting assistance, and planning support only.

Required sections:

- General resource disclaimer
- Legal-adjacent template disclaimer
- Technical, budgeting, procurement, and compliance disclaimer
- No official approval or guaranteed sufficiency claim
- User responsibility for review and adaptation

### Privacy Policy

Purpose:

Explain how personal information is collected, used, stored, and protected if forms, analytics, email signup, downloads, or lead capture are added.

Required sections:

- Information collected
- Purpose of collection
- Analytics or cookies, if used
- Contact form handling, if used
- Data retention note
- User rights or contact method

## 8. Homepage Structure

Recommended homepage sections:

- Hero section
- Search or browse resources
- Featured templates
- Resource categories
- Recently added resources
- CiviCore service note
- Future SheetBot contextual link area, not active yet

Homepage notes:

- Keep the homepage practical and resource-focused.
- Make search and category browsing easy.
- Do not overemphasize monetization or sales during the first launch.
- Keep future contextual link areas inactive until the related resources and policy notes are ready.

## 9. Draft Conversion Workflow

Markdown drafts under /content/drafts may later be converted into WordPress drafts using this workflow:

1. Review markdown draft.
2. Copy content into the WordPress editor.
3. Assign category and tags.
4. Set slug.
5. Set meta title and description.
6. Add disclaimer block.
7. Preview on desktop and mobile.
8. Schedule or publish after approval.

Detailed notes:

- Confirm the markdown title matches the WordPress post title.
- Do not publish directly from markdown without review.
- Keep legal-adjacent templates in draft until extra review is complete.
- Convert markdown tables carefully so they remain readable on mobile.
- Add internal links only after related posts exist.
- Keep the original markdown file as the source draft unless a later workflow changes this standard.

## 10. SEO Checklist for Each WordPress Post

Before scheduling or publishing each resource post, confirm:

- Title
- Slug
- Meta title
- Meta description
- Category
- Tags
- Internal links
- Readable headings
- Disclaimer if needed

Additional SEO notes:

- Focus on one clear topic per post.
- Use plain language.
- Avoid thin or duplicate content.
- Keep headings practical and search-friendly.
- Link related resources where helpful.

## 11. Launch Publishing Sequence

Recommended launch publishing order:

1. Disclaimer page
2. Privacy Policy page, if forms/analytics are added
3. About page
4. Homepage
5. First 10 resource posts

Launch notes:

- If no forms or analytics are active, the Privacy Policy may be drafted before launch and finalized when data collection details are confirmed.
- Legal-adjacent resource posts should be reviewed before publication.
- Test content should not be visible on production.
- Staging content should not be indexed.

## 12. Future Improvements

Future improvements may include:

- Downloadable PDF/DOCX template versions
- Premium template packs
- Simple calculators
- SheetBot contextual links
- Newsletter or update signup, if appropriate later

Future improvements should be added only after the initial content structure, review process, disclaimers, and WordPress publishing workflow are stable.
