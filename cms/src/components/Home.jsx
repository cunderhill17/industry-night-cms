export default function Home() {
    return (
        <section className="homepage">
            <div className="title-banner">
                <h2>IMD PROGRAM OVERVIEW</h2>
                <h3>Interactive Media Design &middot; Central CMS</h3>
            </div>

            <section className="program-overview">
                <h3>Program Overview</h3>

                <div className="info-card-con">
                    <div className="info-card">
                        <p>48</p>
                        <p>STUDENTS</p>
                    </div>
                    <div className="info-card">
                        <p>142</p>
                        <p>PROJECTS</p>
                    </div>
                    <div className="info-card">
                        <p>12</p>
                        <p>PENDING</p>
                    </div>
                </div>
            </section>

            <section className="quick-actions">
                <h3>Quick Actions</h3>

                <div className="actions-con">
                    <button className="act-btn">
                        <span>ADD PORTFOLIO</span>
                        <span>Add a new student portfolio entry</span>
                    </button>
                    <button className="act-btn">
                        <span>ADD PROJECT</span>
                        <span>Add a new program project</span>
                    </button>
                </div>
            </section>
        </section>
    )
}