<section class="expertise" x-data="{
    currentIndex: 0,
    slides: ['ui', 'pm', 'dev'],
    next() {
        this.currentIndex = this.currentIndex === this.slides.length - 1 ? 0 : this.currentIndex + 1;
        this.updateHash();
    },
    prev() {
        this.currentIndex = this.currentIndex === 0 ? this.slides.length - 1 : this.currentIndex - 1;
        this.updateHash();
    },
    goToSlide(index) {
        this.currentIndex = index;
        this.updateHash();
    },
    updateHash() {
        window.location.hash = this.slides[this.currentIndex];
    },
    init() {
        // Set initial slide based on hash or default to first slide
        const hash = window.location.hash.slice(1);
        this.currentIndex = this.slides.indexOf(hash) !== -1 ? this.slides.indexOf(hash) : 0;

        // Listen for keyboard navigation
        window.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') this.prev();
            if (e.key === 'ArrowRight') this.next();
        });
    }
}">
	<h2><x-tabler-tie />Expertise</h2>
	<div class="items">
		<button class="prev" @click="prev" aria-label="Previous slide"><x-tabler-arrow-left /></button>
		<article id="ui"
			x-show="currentIndex === 0">
			<h3>Ux/Ui Design</h3>
			<ul>
				<li><x-tabler-icons />Led over a dozen design sprints for diverse clients.</li>
				<li><x-tabler-icons />7+ years experience in Figma with previous experience in Sketch, Adobe Xd and Photoshop.</li>
				<li><x-tabler-icons />Earned Google Ux/Ui Career Certificate.</li>
			</ul>
		</article>
		<article id="pm"
			x-show="currentIndex === 1">
			<h3>Project Managment</h3>
			<ul>
				<li><x-tabler-brand-trello />Introduced Scrum to my team and acted as Product Owner for dozens of projects.</li>
				<li><x-tabler-brand-trello />Over 10 years experience with PM tools like Clickup, Mondaay, Basecamp, Jira, and Github Projects.</li>
				<li><x-tabler-brand-trello />Familiarity with Scrum, Kanban, and Waterfall PM methodoligies.</li>
				<li><x-tabler-brand-trello />Certified Scrum Project Owner (CSPO)</li>
			</ul>
		</article>
		<article id="dev"
			x-show="currentIndex === 2">
			<h3>Full-Stack Dev</h3>
			<ul>
				<li><x-tabler-terminal-2 /> 20+ years of experience with HTML/CSS/JS.</li>
				<li><x-tabler-terminal-2 />Extensive experience building web apps with the Laravel framework (PHP).</li>
				<li><x-tabler-terminal-2 />Additional experience with Vue, React, Firebase, Nodejs, and Hotwire.</li>
				<li><x-tabler-terminal-2 />Experience with cloud deployment technologies (AWS, Digital Ocean, Kubernetes, CI/CD Pipelines).</li>
			</ul>
		</article>
		<nav class="dots">
			<template x-for="(slide, index) in slides" :key="index">
				<button
					@click="goToSlide(index)"
					:class="{ 'active': currentIndex === index }"
					:aria-label="'Go to slide ' + (index + 1)">
					<x-tabler-circle-filled />
				</button>
			</template>
		</nav>
		<button class="next" @click="next" aria-label="Next slide"><x-tabler-arrow-right /></button>
	</div>
	<img class="venn" src="/venn.png" alt="A Venn diagram showing overlaping circles labled Ui/Ux, PM and Dev." />

</section>
