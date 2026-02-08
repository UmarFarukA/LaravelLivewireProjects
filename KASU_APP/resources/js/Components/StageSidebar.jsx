import { Link, usePage } from '@inertiajs/react'

function StageSidebar({ stages, application }) {
    const { url } = usePage()

    return (
        <aside className="w-64 bg-white border rounded-lg p-4">
            <h3 className="font-semibold text-gray-700 mb-4">
                Application Steps
            </h3>

            <ul className="space-y-2">
                {stages.map(stage => {
                    const active = url.includes(stage.slug)

                    return (
                        <li key={stage.id}>
                            <Link
                                href={route(`applications.${stage.slug}`, application.id)}
                                className={`flex items-center justify-between px-3 py-2 rounded-md text-sm
                                    ${active
                                        ? 'bg-green-700 text-white'
                                        : 'hover:bg-gray-100 text-gray-700'}
                                `}
                            >
                                <span>{stage.name}</span>

                                {stage.is_completed && (
                                    <span className="text-xs bg-green-100 text-green-700 px-2 py-0.5 rounded">
                                        ✓
                                    </span>
                                )}
                            </Link>
                        </li>
                    )
                })}
            </ul>
        </aside>
    )
}

export default StageSidebar
