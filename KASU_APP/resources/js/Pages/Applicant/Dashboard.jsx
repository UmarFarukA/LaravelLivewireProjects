import DashboardHome from "@/Layouts/DashboardHome"

function Dashboard({ children }) {
    return (
        <>
            <div className="grid grid-cols-12 gap-6">
                {children}
            </div>
        </>
    )
}

Dashboard.layout = page => <DashboardHome applications={page.props.applications} children={page} />

export default Dashboard
